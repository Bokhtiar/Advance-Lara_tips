@extends('welcome')
@section('cotnent')

<section class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Create Form</h4>
            <form action="{{ url('todo') }}" method="POST" class="form-group">

                @method('POST')
                <input type="text" name="title" placeholder="title" class="form-control">
                <textarea name="description" id="" cols="10" placeholder="description" rows="4" class="form-control"></textarea>
                <input type="submit" class="btn btn-sm bg-primary" value="Submit">
            </form>
        </div>
        <div class="col-md-8">
            <h4>Todo Table</h4>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($todos as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <span class="">active</span>
                        </td>
                        <td>
                            <a href="@route('todo.show', $item->id)">show</a>
                        </td>
                      </tr>
                    @empty

                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</section>

@endsection
