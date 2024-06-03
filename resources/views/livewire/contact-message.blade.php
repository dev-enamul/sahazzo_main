<!-- contact-message.blade.php -->
<div>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> 
    @endif
    <form wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" wire:model="name" placeholder="Name" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" wire:model="email" placeholder="Email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" wire:model="phone" placeholder="Phone" required>
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="message">Message <span class="text-danger">*</span></label>
            <textarea class="form-control" rows="5" wire:model="message" placeholder="Message" required></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
