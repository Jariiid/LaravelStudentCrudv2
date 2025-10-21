@props(['student'])

<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->student_number }}</td>
    <td>{{ $student->email }}</td>
</tr>
