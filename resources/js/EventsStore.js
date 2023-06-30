import { makeAutoObservable } from 'mobx'

class EventsStore {
  events = []

  constructor() {
    makeAutoObservable(this)
    this.load()
  }

  async load() {
    const response = await fetch('/api/events')
    this.events = await response.json()
  }

  async save(eventData) {
    let response, result
    if (eventData.id) {
      response = await fetch('/api/events/' + eventData.id, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(eventData)
      });
    } else {
      response = await fetch('/api/events', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(eventData)
      });
    }
    result = await response.json()
    if (result.id) {
      this.events = this.events.filter(event => event.id !== result.id)
      this.events.push(result)
    }
  }

  async delete(eventData) {
    const response = await fetch('/api/events/' + eventData.id, {
      method: 'DELETE',
      headers: { 'Content-Type': 'application/json' }
    });
    const result = await response.json()
    if (result.success) {
      this.events = this.events.filter(event => event.id !== eventData.id)
    }
  }
}

const eventsStore = new EventsStore()
export default eventsStore