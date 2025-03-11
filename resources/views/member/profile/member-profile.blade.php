@extends('member.member_dashboard')
@section('member_content')
<div class="page-content">
    <div class="container-fluid">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>John Doe</h4>
                                    <p class="text-secondary mb-1">{{ $AuthUser->name }}</p>
                                    <p class="text-muted font-size-sm">{{ $AuthUser->address }} {{ $AuthUser->city }} {{ $AuthUser->state }} {{ $AuthUser->country }}</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                    <span class="text-secondary">https://codervent.com</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Profile Basic Information</h5>
                            <form action="">
                                @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="John Doe" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="john@example.com" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="(239) 816-9029" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="(320) 380-4539" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="Bay Area, San Francisco, CA" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="Save Changes" />
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h5 class="mb-4">Member Official Information</h5>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="input1" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="input1" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="input2" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="input2" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input3" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="input3" placeholder="Phone">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="input4" placeholder="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input5" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="input5" placeholder="Password">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input6" class="form-label">DOB</label>
                                            <input type="date" class="form-control" id="input6" placeholder="Date of Birth">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input7" class="form-label">Country</label>
                                            <select id="input7" class="form-select">
                                                <option selected="">Choose...</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="input8" class="form-label">City</label>
                                            <input type="text" class="form-control" id="input8" placeholder="City">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="input9" class="form-label">State</label>
                                            <select id="input9" class="form-select">
                                                <option selected="">Choose...</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="input10" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="input10" placeholder="Zip">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input11" class="form-label">Address</label>
                                            <textarea class="form-control" id="input11" placeholder="Address ..." rows="3"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="input12">
                                                <label class="form-check-label" for="input12">Check me out</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="button" class="btn btn-primary px-4">Submit</button>
                                                <button type="button" class="btn btn-light px-4">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endphp