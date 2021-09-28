<div class="form">
    todo list query date ways
    <form action="{{ url('date/store') }}" method="POST">
        @csrf
        <input type="date" placeholder="start date" name="start_date" id="">
        <input type="date" placeholder="start date" name="end_date" id="">
        <input type="submit" placeholder="start date" value="submit" name="" id="">
    </form>
</div>
