<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'material' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'test_questions' => 'required|array',
            'test_questions.*.question' => 'required|string',
            'test_questions.*.options' => 'required|array',
            'test_questions.*.options.*' => 'required|string',
            'test_questions.*.correct_option' => 'required|integer',
        ]);
    
        // Сохранение данных в базу данных
        $course = new Course();
        $course->title = $validatedData['title'];
        $course->description = $validatedData['description'];
        $course->material = $request->file('material')->store('public/materials');
    
        // Сохранение вопросов теста
        $testQuestions = [];
        foreach ($validatedData['test_questions'] as $questionData) {
            $testQuestions[] = [
                'question' => $questionData['question'],
                'options' => $questionData['options'],
                'correct_option' => $questionData['correct_option'],
            ];
        }
        $course->test_questions = $testQuestions;
    
        $course->save();
    
        return redirect()->route('courses.show', $course->id);
    }
}