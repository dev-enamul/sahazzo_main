<div>
    <livewire:common.breadcrumb />
    <section class="bg-white">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-md-12"></div>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if(session()->has('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div> 
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div> 
                    @endif

                    <div class="title">
                        <h2>Submit CV</h2>
                    </div>
                    <p>Ready to take the next step in your career? Submit your CV here and open doors to exciting opportunities. Our dedicated team will carefully review your qualifications, ensuring the perfect match for your skills and ambitions. Join us on the path to success – your dream job awaits!</p>
                    <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
                        <!-- Your form fields -->
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') border-danger @enderror" wire:model="name" id="name" placeholder="Name" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') border-danger @enderror" wire:model="email" id="email" placeholder="Email" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('phone') border-danger @enderror" wire:model="phone" id="phone" placeholder="Phone" required>
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Cover Letter -->
                        <div class="form-group">
                            <label for="coverLetter">Cover Letter</label>
                            <textarea class="form-control @error('coverLetter') border-danger @enderror" wire:model="coverLetter" id="coverLetter" rows="5" placeholder="Cover Letter"></textarea>
                            @error('coverLetter') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- CV -->
                        <div class="form-group">
                            <label for="cv">CV <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file @error('cv') border-danger @enderror" wire:model="cv" wire:ignore id="cv" required>
                            @error('cv') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                            @if($submitting)
                                Submitting...
                            @else
                                Submit
                            @endif
                        </button>
                    </form> 
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</div>
