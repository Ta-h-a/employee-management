<div class="navbar bg-base-100 morph" data-theme="forest">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl rounded-lg" href="{{ route("home.index") }}">Alpha Team</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        {{-- <li><a>Link</a></li> --}}
        <li>
          <details>
            <summary>
              Actions
            </summary>
            <ul class="p-2 bg-base-100" style="right: 0.1vw;" data-theme="halloween" >
              <li><a href="{{ route("employee.create") }}">Add</a></li>
              <li><a href="{{ route("employee.index") }}">Working</a></li>
              <li><a href="{{ route("employee.deletedItems") }}">Removed</a></li>
            </ul>
          </details>
        </li>
      </ul>
    </div>
  </div>