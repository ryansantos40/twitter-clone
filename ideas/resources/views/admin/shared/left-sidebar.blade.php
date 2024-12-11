<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{Route::is('admin.dashboard') ? 'text-white bg-primary rounded' : ''}} nav-link" href="{{route('admin.dashboard')}}">
                    <span>Dashboard</span></a>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.users.index')}}" class="{{Route::is('admin.users.index') ? 'text-white bg-primary rounded' : ''}}  nav-link">
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.ideas.index') }}" class="{{Route::is('admin.ideas.index') ? 'text-white bg-primary rounded' : ''}}  nav-link">
                    <span>Ideas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.comments.index') }}" class="{{Route::is('admin.comments.index') ? 'text-white bg-primary rounded' : ''}}  nav-link">
                    <span>Comments</span>
                </a>
            </li>
            
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{route('locale',['lang' => 'en'])}}">en</a>
        <a class="btn btn-link btn-sm" href="{{route('locale',['lang' => 'pt'])}}">pt-br</a>
    </div>
</div>