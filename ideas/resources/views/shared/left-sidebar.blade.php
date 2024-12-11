<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{Route::is('dashboard') ? 'text-white bg-primary rounded' : ''}} nav-link" href="{{route('dashboard')}}">
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route('feed')}}" class=" {{Route::is('feed') ? 'text-white bg-primary rounded' : ''}} nav-link">
                    <span>Feed</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('terms')}}" class="{{Route::is('terms') ? 'text-white bg-primary rounded' : ''}} nav-link">
                    <span>Terms</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{route('locale',['lang' => 'en'])}}">en</a>
        <a class="btn btn-link btn-sm" href="{{route('locale',['lang' => 'pt'])}}">pt-br</a>
    </div>
</div>