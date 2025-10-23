@props(['student'])

<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->fname }} {{ $student->mname }} {{ $student->lname }}</td>
    <td>{{ $student->student_number }}</td>
    <td>{{ $student->email }}</td>
    <td class="space-x-3">
        <!-- Edit Link -->
        <a href="{{ route('students.edit', $student->id) }}" class="text-gray-500 hover:text-gray-700">Edit</a>

        <!-- Delete Form -->
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline delete-form">
            @csrf
            @method('DELETE')
            <button 
                type="button" 
                class="text-red-500 hover:text-red-700"
                onclick="openDeleteModal(this.form, '{{ $student->name }}')">
                Delete
            </button>
        </form>

        <!-- Modal -->
        <dialog id="deleteModal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold text-red-600">Confirm Deletion</h3>
            <p id="deleteMessage" class="py-4"></p>
            <div class="modal-action">
            <form method="dialog">
                <button class="btn" onclick="closeDeleteModal()">Cancel</button>
            </form>
            <button class="btn bg-red-600 text-white" onclick="confirmDelete()">Yes, Delete</button>
            </div>
        </div>
        </dialog>
    </td>
</tr>

<script>
    let currentForm = null;

    function openDeleteModal(form, studentName) {
        currentForm = form;
        document.getElementById('deleteMessage').textContent = 
            `Are you sure you want to delete student "${studentName}"?`;
        document.getElementById('deleteModal').showModal();
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').close();
        currentForm = null;
    }

    function confirmDelete() {
        if (currentForm) currentForm.submit();
        closeDeleteModal();
    }
</script>