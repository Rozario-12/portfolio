{{-- livewire/contact-form.blade.php --}}

<div>

    {{-- Success/Failure Message --}}
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submitForm" method="post">
        @csrf
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name :</label>
            <input type="text" wire:model="name" name="name" class="form-control" id="fullName" placeholder="Enter your full name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address :</label>
            <input type="email" wire:model="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message :</label>
            <textarea class="form-control" name="message" wire:model="message" id="message" rows="3" placeholder="Enter your message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Resume
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">RESUME</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="assets/image/DAVID/DavidResume-1.png" width="400px" alt="">
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="assets/image/DavidResume.pdf" download="proposed_file_name">Download</a>
                        <button type="button" id="downloadBtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
