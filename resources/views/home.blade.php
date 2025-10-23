<x-layout>
    <x-slot:title>
        Home Feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Latest Students</h1>

        <!-- Add Alpine.js for interactivity -->
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

            <div x-data="{ showForm: {{ $errors->any() ? 'true' : 'false' }} }" class="mt-8">
                <!-- Toggle Button -->
                <div class="flex justify-end mb-4">
                    <button @click="showForm = !showForm" class="btn btn-primary btn-sm">
                        <span x-show="!showForm">+ Add Student</span>
                        <span x-show="showForm"> Cancel</span>
                    </button>
                </div>

                <!-- Student Form (hidden by default) -->
                <div x-show="showForm" x-transition class="card bg-base-100 shadow">
                    <div class="card-body">
                        <form method="POST" action="/students">
                            @csrf

                            <!-- Full Name -->
                            <div class="form-control w-full mb-3">
                                <label class="label">
                                    <span class="label-text">Full Name</span>
                                </label>
                                <div class="flex gap-3">
                                    <input type="text" name="fname" value="{{ old('fname') }}"
                                        class="input input-bordered w-1/3 @error('fname') input-error @enderror"
                                        placeholder="First Name">

                                    <input type="text" name="mname" value="{{ old('mname') }}"
                                        class="input input-bordered w-1/3 @error('mname') input-error @enderror"
                                        placeholder="Middle Name">

                                    <input type="text" name="lname" value="{{ old('lname') }}"
                                        class="input input-bordered w-1/3 @error('lname') input-error @enderror"
                                        placeholder="Last Name">
                                </div>

                                <div class="flex gap-3 mt-1 text-sm text-error">
                                    <div class="w-1/3">@error('fname') {{ $message }} @enderror</div>
                                    <div class="w-1/3">@error('mname') {{ $message }} @enderror</div>
                                    <div class="w-1/3">@error('lname') {{ $message }} @enderror</div>
                                </div>
                            </div>

                            <!-- Student Details -->
                            <div class="form-control w-full mb-4">
                                <label class="label">
                                    <span class="label-text">Student Details</span>
                                </label>
                                <div class="flex gap-3">
                                    <input type="number" name="student_number" value="{{ old('student_number') }}"
                                        class="input input-bordered w-1/2 @error('student_number') input-error @enderror"
                                        placeholder="Student Number">

                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="input input-bordered w-1/2 @error('email') input-error @enderror"
                                        placeholder="Email Address">
                                </div>

                                <div class="flex gap-3 mt-1 text-sm text-error">
                                    <div class="w-1/2">@error('student_number') {{ $message }} @enderror</div>
                                    <div class="w-1/2">@error('email') {{ $message }} @enderror</div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Save Student
                                </button>
                            </div>
                        </form>
                    </div>
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
                        <th>Action</th>
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

        <div class="mt-8">
            <div>
                {{ $students->links() }}
            </div>
        </div>
    </div>
</x-layout>