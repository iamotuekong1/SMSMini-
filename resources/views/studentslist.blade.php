<div class="card mb-3">
    <img src="https://guardian.ng/wp-content/uploads/2020/09/education.jpg" class="card-img-top" style="max-height: 50vh; object-fit: cover;" alt="...">
    <div class="card-body">
      <h5 class="card-title">List of Students   </h5>
      <p class="card-text">You can find here all the information about the students in the System</p>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Specialty</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->cne}}</td>
            <td>{{$student->firstName}}</td>
            <td>{{$student->secondName}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->specialty}}</td>
            <td>
                <a href="{{ url('/edit/'.$student->id) }}') }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
  {{-- <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
    <img src="..." class="card-img-bottom" alt="...">
  </div> --}}


