<div class="form-group">
    <label for="user_id">User</label>
    <input type="text" class="form-control" id="user_id" name="user_id">
    <div id="userList"></div>
</div>

<script>
    $(document).ready(function(){
        $('#user_id').on('keyup', function(){
            var value = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/findUser',
                data: {search:value},
                success:function(data){
                    $('#userList').show();
                    $('#userList').html("");
                    $.each(data, function(index, user){
                        $('#userList').append('<div class="list-group"><a href="#" class="list-group-item list-group-item-action">'+user.name+'</a></div>');
                    })
                }
            });
        });

        $(document).on('click', 'a', function(){
            var name = $(this).html();
            $('#user_id').val(name);
            $('#userList').hide();
        });
    });
</script>