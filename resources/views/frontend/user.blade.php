<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User</title>
  @include('backend.style')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <main class="container">
    <div class="card shadow-lg mx-auto" style="max-width: 800px; border-radius: 15px;">
      <div class="card-header text-center text-black">
        <strong><h4>Feedback Box</h4></strong>
      </div>
      <form action="{{ route('sermit') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
        <div class="card-body">
          <div class="mb-4">
            <label for="type" class="form-label">Type</label>
            <div class="d-flex justify-content-evenly">
              <div class="form-check">
                <input type="radio" id="saran" name="type" value="saran" class="form-check-input">
                <label for="saran" class="form-check-label">Saran</label>
              </div>
              <div class="form-check">
                <input type="radio" id="kritik" name="type" value="kritik" class="form-check-input">
                <label for="kritik" class="form-check-label">Kritik</label>
              </div>
              <div class="form-check">
                <input type="radio" id="pujian" name="type" value="pujian" class="form-check-input">
                <label for="pujian" class="form-check-label">Pujian</label>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Input Message"></textarea>
          </div>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-primary w-100">
            <i class="fa fa-paper-plane"></i> Submit
          </button>
          <!-- Icon for admin response -->
          <div class="mt-3">
            <a href="/responses" class="text-secondary" title="View responses from admin">
              <i class="fa fa-comments fa-2x"></i>
              <p class="mt-1">View Responses</p>
            </a>
          </div>
        </div>        
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
