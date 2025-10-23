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

                    <!-- Name Fields -->
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <!-- First Name -->
                        <div class="form-control w-full">
                            <label class="label font-semibold">First Name</label>
                            <input type="text" name="fname" value="{{ old('fname', $student->fname) }}" class="input input-bordered w-full @error('fname') input-error @enderror" required />
                            @error('fname')
                                <div class="label"><span class="label-text-alt text-error">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <!-- Middle Name -->
                        <div class="form-control w-full">
                            <label class="label font-semibold">Middle Name</label>
                            <input type="text" name="mname" value="{{ old('mname', $student->mname) }}" class="input input-bordered w-full @error('mname') input-error @enderror" />
                            @error('mname')
                                <div class="label"><span class="label-text-alt text-error">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <!-- Last Name -->
                        <div class="form-control w-full">
                            <label class="label font-semibold">Last Name</label>
                            <input type="text" name="lname" value="{{ old('lname', $student->lname) }}" class="input input-bordered w-full @error('lname') input-error @enderror" required />
                            @error('lname')
                                <div class="label"><span class="label-text-alt text-error">{{ $message }}</span></div>
                            @enderror
                        </div>
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