@extends('layouts.main')


@section('content')
<div class="card">
  <div class="card-header">
    <h4>All Employees</h4>
  </div>
  <div class="card-body">
   
      
      <table class="table" cellpadding="10" >
        <form action="{{ route('employees.all') }}">
          <tr>
            <td><input class="form-control" type="text" name="name" value="{{ request('name') }}" placeholder="Name" style="width:70px" ></td>
            <td><input class="form-control" type="text" name="lastname" value="{{ request('lastname') }}" placeholder="Lastname"></td>
            <td><input class="form-control" type="text" step="any" name="birthdate" value="{{ request('birthdate') }}" placeholder="Birthdate"></td>
            <td><input class="form-control" type="number" step="any" name="personal_id" value="{{ request('personal_id') }}" placeholder="Personal ID"></td>
            <td><input class="form-control" type="number" name="salary" value="{{ request('salary') }}" placeholder="Salary"></td>
            <td colspan="2"><button class="btn btn-success"type="submit">Filter</button></td>
          </tr>
        </form>

        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Date Added</th>
          <th>Actions</th>
        </tr>
        
        <form action="{{ route('employees.add') }}" method="POST" >
          @csrf
          <tr>
            <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter Employee Name"></td>
            <td><input class="form-control" type="text" step="any" name="lastname" placeholder="Enter Employee Lastname"></td>
            <td><input class="form-control" type="text" name="birthdate" placeholder="Enter Employee Birthdate"></td>
            <td><input class="form-control" type="text" name="personal_id" placeholder="Enter Employee Personal ID"></td>
            <td><input class="form-control" type="number" name="salary" placeholder="Enter Employee Salary"></td>
            <td><button class="btn btn-success"type="submit">Add</button></td>
            <td>#</td>
          </tr>
        </form>

        @foreach($employees as $pr)
          <tr>
            <td>{{ $pr->name }}</td>
            <td>{{ $pr->lastname }}</td>
            <td>{{ $pr->birthdate }}</td>
            <td>{{ $pr->personal_id }}</td>
            <td>{{ $pr->salary }}</td>
            <td> 
              <form action="{{ route('employees.delete') }}" method="post">
                @csrf
                <input type="hidden" name="employee_id" value="{{ $pr->id }}" />
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        
      </table>
  </div>
</div>
  
@endsection