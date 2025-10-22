<x-layout>
    <x-slot:title>
        Edit Student
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Edit Student</h1>

        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="{{ route('students.update', $student->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Full Name -->
                    <div class="form-control w-full mb-4">
                        <label class="label font-semibold">Full Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            value="{{ old('name', $student->name) }}"
                            class="input input-bordered w-full @error('name') input-error @enderror"
                            required
                        />
                        @error('name')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Student Number -->
                    <div class="form-control w-full mb-4">
                        <label class="label font-semibold">Student Number</label>
                        <input 
                            type="text" 
                            name="student_number" 
                            value="{{ old('student_number', $student->student_number) }}"
                            class="input input-bordered w-full @error('student_number') input-error @enderror"
                            required
                        />
                        @error('student_number')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-control w-full mb-4">
                        <label class="label font-semibold">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            value="{{ old('email', $student->email) }}"
                            class="input input-bordered w-full @error('email') input-error @enderror"
                            required
                        />
                        @error('email')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="card-actions justify-between mt-4">
                        <a href="/" class="text-red-500 hover:text-red-700">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Update Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>