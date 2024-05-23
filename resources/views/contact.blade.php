<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-form {
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            border-radius: 10px;
            padding: 30px;
        }
        .contact-form .form-control {
            border-radius: 1rem;
        }
        .contact-form h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #0062cc;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .contact-form .btnContactSubmit {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container contact-form">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <h3>Drop Us a Message</h3>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name *" value="" required />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email *" value="" required />
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" placeholder="Your Message *" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btnContact">Send Message</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
