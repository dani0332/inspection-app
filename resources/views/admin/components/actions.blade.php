<div class="dropdown">
    <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            id="actionMenu1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
    >
        Actions
    </button>
    <ul
            class="dropdown-menu actions"
            aria-labelledby="actionMenu1"
    >
        <li>
            <a
                    class="dropdown-item edit"
                    href="#"
                    data-id="${data}"
                    {{-- ${data} is JS format --}}

            >Edit</a
            >
        </li>
        <li>
            <a
                    class="dropdown-item delete"
                    href="#"
                    data-id="${data}"
                    {{-- ${data} is JS format --}}
            >Delete</a
            >
        </li>
    </ul>
</div>