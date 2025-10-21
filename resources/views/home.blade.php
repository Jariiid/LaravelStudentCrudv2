<x-layout>
    <x-slot:title>
        Home Feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Latest Students</h1>

        <!-- Student Form -->
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/students">
                    @csrf
                    <div class="form-control w-full mb-3">
                        <label class="label">
                            <span class="label-text">Full Name</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="input input-bordered w-full @error('name') input-error @enderror"
                            placeholder="Enter student name">
                        @error('name')
                            <span class="text-error text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control w-full mb-3">
                        <label class="label">
                            <span class="label-text">Student Number</span>
                        </label>
                        <input type="number" name="student_number" value="{{ old('student_number') }}"
                            class="input input-bordered w-full @error('student_number') input-error @enderror"
                            placeholder="Enter student number">
                        @error('student_number')
                            <span class="text-error text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control w-full mb-4">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="input input-bordered w-full @error('email') input-error @enderror"
                            placeholder="Enter student email">
                        @error('email')
                            <span class="text-error text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Add Student
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Feed -->
        <div class="mt-8">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Student Number</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <x-student :student="$student" />
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No Students yet. Be the first to add one!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>