@extends('user_type.auth', ['parentFolder' => 'pages', 'childFolder' => 'account'])

@section('content')
  <div class="container-fluid mt-4">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-8">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                Messages
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#" role="tab" aria-selected="false">
                Social
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#" role="tab" aria-selected="false">
                Notifications
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1  active " data-bs-toggle="tab" href="#" role="tab" aria-selected="false">
                Backup
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid my-3 py-3">
    <div class="row">
      <div class="col-sm-6">
        <label class="form-label">Security Question</label>
        <select class="form-control" name="choices-questions" id="choices-questions">
          <option value="Question 1">Question 1</option>
          <option value="Question 2">Question 2</option>
          <option value="Question 3">Question 3</option>
          <option value="Your Question" disabled>Your Question</option>
        </select>
      </div>
      <div class="col-sm-6">
        <label class="form-label">Your Answer</label>
        <div class="form-group">
          <input class="form-control" type="text" placeholder="Enter your answer">
        </div>
      </div>
      <hr class="horizontal dark mt-1 mb-3">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Security Settings</h6>
          </div>
          <div class="card-body p-3">
            <div class="form-group d-flex align-items-center justify-content-between">
              <span class="text-sm">Notify me via email when logging in</span>
              <div class="form-check form-switch ms-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault30" checked="" onchange="visible()">
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <span class="text-sm">Send SMS confirmation for all online payments</span>
              <div class="form-check form-switch ms-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault31" onchange="visible()">
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <span class="text-sm">Check which devices accessed your account</span>
              <div class="form-check form-switch ms-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault32" checked="" onchange="visible()">
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <span class="text-sm">Find My Device, make sure your device can be found if it gets lost</span>
              <div class="form-check form-switch ms-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault33" onchange="visible()">
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <span class="text-sm">Lock your device with a PIN, pattern, or password</span>
              <div class="form-check form-switch ms-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault34" onchange="visible()">
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <span class="text-sm">Manage what apps have access to app-usage data on your device</span>
              <div class="form-check form-switch ms-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault35" checked="" onchange="visible()">
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-lg-8 col-12 actions text-end ms-auto">
                <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Cancel</button>
                <button class="btn bg-gradient-primary btn-sm mb-0" type="button">Save Changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-md-0 mt-4">
        <div class="card">
          <div class="card-header p-3 pb-0">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">
                Two factor authentication
              </h6>
              <button class="btn btn-sm bg-gradient-dark ms-auto mb-0">
                Enable
              </button>
            </div>
          </div>
          <div class="card-body p-3">
            <p class="text-muted text-sm mb-4 mt-sm-5 mt-3">
              Two-factor authentication adds an additional
              layer of security to your account by requiring more
              than just a password to log in.
            </p>
            <div class="card">
              <div class="card-body border-radius-lg bg-gradient-dark p-3">
                <h6 class="mb-0 text-white">
                  Questions about security?
                </h6>
                <p class="text-white text-sm mb-4">
                  Have a question, concern, or comment
                  about security? Please contact us.
                </p>
                <button class="btn bg-gradient-light mb-0">Contact Us</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row gx-4 mt-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header p-3 pb-0">
            <h6 class="mb-1">Change password</h6>
            <p class="text-sm mb-0">
              We will send you an email with the verification code.
            </p>
          </div>
          <div class="card-body p-3">
            <label class="form-label">Current password</label>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="Current password">
            </div>
            <label class="form-label">New password</label>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="New password">
            </div>
            <label class="form-label">Confirm new password</label>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="Confirm password">
            </div>
            <button class="btn bg-gradient-dark w-100 mb-0">Update password</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-md-0 mt-4">
        <div class="card">
          <div class="card-header p-3 pb-0">
            <h6 class="mb-1">
              Password requirements
            </h6>
            <p class="text-sm mb-0">
              Please follow this guide for a strong password:
            </p>
          </div>
          <div class="card-body p-3">
            <ul class="text-muted ps-4 mb-0">
              <li>
                <span class="text-sm">One special characters</span>
              </li>
              <li>
                <span class="text-sm">Min 6 characters</span>
              </li>
              <li>
                <span class="text-sm">One number (2 are recommended)</span>
              </li>
              <li>
                <span class="text-sm">Change it often</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @include('layouts/footers/auth/footer')
  </div>
@endsection
  
  @push('js')  
    <script src="{{ URL::asset('assets/js/plugins/choices.min.js') }}"></script>
    <script>
      if (document.getElementById('choices-questions')) {
        var element = document.getElementById('choices-questions');
        const example = new Choices(element);
      }
    </script>
  @endpush