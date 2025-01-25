<x-table-action>
    <a class="dropdown-item" href="javascript:void(0)" data-url="{{ route('clients.edit', ['client' => \Crypt::encrypt($id)]) }}" data-ajax-modal="true"
        data-title="Edit Client" data-size="lg"><i class="fa-solid fa-pencil m-r-5"></i>
        {{ __('Edit') }}
    </a>
    <a class="dropdown-item deleteBtn" data-route="{{ route('clients.destroy', $id) }}" data-title="Delete Client"
        data-question="Are you sure you want to delete?" href="javascript:void(0)">
        <i class="fa-regular fa-trash-can m-r-5"></i>
        {{ __('Delete') }}
    </a>
</x-table-action>
