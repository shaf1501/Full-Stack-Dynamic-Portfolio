@extends('admin.layout')

@section('title', 'Personal Details')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <span>Personal Details</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Personal Details</h1>
        <p class="page-subtitle">Manage your personal information and contact details</p>
    </div>
</div>

<form action="{{ route('admin.personal-details.update') }}" method="POST" class="personal-form">
    @csrf
    @method('PUT')
    
    <div class="form-grid">
        <div class="main-form">
            <!-- Basic Information -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-user"></i>
                        Basic Information
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   class="form-control @error('name') error @enderror" 
                                   value="{{ old('name', $personalDetails->name ?? '') }}"
                                   placeholder="Your full name"
                                   required>
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   class="form-control @error('email') error @enderror" 
                                   value="{{ old('email', $personalDetails->email ?? '') }}"
                                   placeholder="your@email.com"
                                   required>
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   class="form-control @error('phone') error @enderror" 
                                   value="{{ old('phone', $personalDetails->phone ?? '') }}"
                                   placeholder="+1 (555) 123-4567">
                            @error('phone')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="website" class="form-label">Personal Website</label>
                            <input type="url" 
                                   id="website" 
                                   name="website" 
                                   class="form-control @error('website') error @enderror" 
                                   value="{{ old('website', $personalDetails->website ?? '') }}"
                                   placeholder="https://yourwebsite.com">
                            @error('website')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" 
                                  name="address" 
                                  class="form-control @error('address') error @enderror" 
                                  rows="3"
                                  placeholder="Your address">{{ old('address', $personalDetails->address ?? '') }}</textarea>
                        @error('address')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="bio" class="form-label">Professional Bio</label>
                        <textarea id="bio" 
                                  name="bio" 
                                  class="form-control @error('bio') error @enderror" 
                                  rows="5"
                                  placeholder="Write a brief professional bio...">{{ old('bio', $personalDetails->bio ?? '') }}</textarea>
                        <div class="form-help">This will appear on your portfolio's about section</div>
                        @error('bio')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-share-alt"></i>
                        Social Media Links
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="linkedin" class="form-label">LinkedIn Profile</label>
                            <div class="input-with-icon">
                                <i class="fab fa-linkedin"></i>
                                <input type="url" 
                                       id="linkedin" 
                                       name="linkedin" 
                                       class="form-control @error('linkedin') error @enderror" 
                                       value="{{ old('linkedin', $personalDetails->linkedin ?? '') }}"
                                       placeholder="https://linkedin.com/in/username">
                            </div>
                            @error('linkedin')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="github" class="form-label">GitHub Profile</label>
                            <div class="input-with-icon">
                                <i class="fab fa-github"></i>
                                <input type="url" 
                                       id="github" 
                                       name="github" 
                                       class="form-control @error('github') error @enderror" 
                                       value="{{ old('github', $personalDetails->github ?? '') }}"
                                       placeholder="https://github.com/username">
                            </div>
                            @error('github')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="twitter" class="form-label">Twitter Profile</label>
                        <div class="input-with-icon">
                            <i class="fab fa-twitter"></i>
                            <input type="url" 
                                   id="twitter" 
                                   name="twitter" 
                                   class="form-control @error('twitter') error @enderror" 
                                   value="{{ old('twitter', $personalDetails->twitter ?? '') }}"
                                   placeholder="https://twitter.com/username">
                        </div>
                        @error('twitter')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-form">
            <!-- Profile Image -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-camera"></i>
                        Profile Image
                    </h3>
                </div>
                <div class="card-body">
                    <div class="current-image">
                        @if($personalDetails && $personalDetails->profile_image)
                            <img src="{{ $personalDetails->profile_image }}" alt="Profile" class="profile-preview">
                        @else
                            <div class="profile-placeholder">
                                <i class="fas fa-user"></i>
                                <span>No image set</span>
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="profile_image" class="form-label">Image URL</label>
                        <input type="text" 
                               id="profile_image" 
                               name="profile_image" 
                               class="form-control @error('profile_image') error @enderror" 
                               value="{{ old('profile_image', $personalDetails->profile_image ?? '') }}"
                               placeholder="https://example.com/image.jpg">
                        <div class="form-help">Enter a URL to your profile image</div>
                        @error('profile_image')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Summary Stats -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-bar"></i>
                        Profile Summary
                    </h3>
                </div>
                <div class="card-body">
                    <div class="summary-stats">
                        <div class="stat-item">
                            <strong>Last Updated:</strong>
                            <span>{{ $personalDetails ? $personalDetails->updated_at->diffForHumans() : 'Never' }}</span>
                        </div>
                        <div class="stat-item">
                            <strong>Profile Status:</strong>
                            <span class="status-badge {{ $personalDetails && $personalDetails->name ? 'active' : 'inactive' }}">
                                {{ $personalDetails && $personalDetails->name ? 'Complete' : 'Incomplete' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i>
                    Save Changes
                </button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-block">
                    <i class="fas fa-arrow-left"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</form>

<style>
.page-header {
    margin-bottom: 2rem;
}

.personal-form {
    max-width: none;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--primary);
    font-size: 0.875rem;
}

.form-control {
    width: 100%;
    padding: 0.875rem;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: var(--white);
}

.form-control:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(15, 130, 140, 0.1);
}

.form-control.error {
    border-color: #ef4444;
}

.form-control::placeholder {
    color: var(--gray-light);
}

textarea.form-control {
    resize: vertical;
    min-height: 80px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-help {
    font-size: 0.75rem;
    color: var(--gray-medium);
    margin-top: 0.25rem;
}

.error-message {
    color: #ef4444;
    font-size: 0.75rem;
    margin-top: 0.25rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.error-message::before {
    content: '⚠';
}

.input-with-icon {
    position: relative;
}

.input-with-icon i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--gray-medium);
    z-index: 1;
}

.input-with-icon .form-control {
    padding-left: 2.5rem;
}

.current-image {
    text-align: center;
    margin-bottom: 1.5rem;
}

.profile-preview {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #e2e8f0;
}

.profile-placeholder {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: #f8fafc;
    border: 2px dashed #cbd5e1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: var(--gray-medium);
    margin: 0 auto;
}

.profile-placeholder i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.profile-placeholder span {
    font-size: 0.875rem;
}

.summary-stats {
    space: 1rem 0;
}

.stat-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid #f1f5f9;
    font-size: 0.875rem;
}

.stat-item:last-child {
    border-bottom: none;
}

.stat-item strong {
    color: var(--gray-dark);
}

.stat-item span {
    color: var(--gray-medium);
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
    text-transform: uppercase;
}

.status-badge.active {
    background: #dcfce7;
    color: #166534;
}

.status-badge.inactive {
    background: #fef2f2;
    color: #991b1b;
}

.form-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-top: 1.5rem;
}

.btn-block {
    width: 100%;
    justify-content: center;
}

@media (max-width: 1024px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
}

/* Form validation styles */
.form-control:valid {
    border-color: #10b981;
}

.form-control:invalid:not(:placeholder-shown) {
    border-color: #ef4444;
}

/* Loading state for submit button */
.btn.loading {
    position: relative;
    color: transparent;
}

.btn.loading::after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 2px solid transparent;
    border-top-color: currentColor;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to { transform: translate(-50%, -50%) rotate(360deg); }
}
</style>

<script>
// Form submission handling
document.querySelector('.personal-form').addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.classList.add('loading');
    submitBtn.disabled = true;
});

// Auto-resize textareas
const textareas = document.querySelectorAll('textarea');
textareas.forEach(textarea => {
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });
});

// Profile image preview
const profileImageInput = document.getElementById('profile_image');
const profilePreview = document.querySelector('.profile-preview');

profileImageInput.addEventListener('input', function() {
    const imageUrl = this.value;
    if (imageUrl && profilePreview) {
        profilePreview.src = imageUrl;
        profilePreview.onerror = function() {
            // If image fails to load, show placeholder
            this.style.display = 'none';
        };
    }
});

// Character count for bio
const bioTextarea = document.getElementById('bio');
if (bioTextarea) {
    const maxLength = 500;
    const counter = document.createElement('div');
    counter.className = 'character-count';
    counter.style.fontSize = '0.75rem';
    counter.style.color = 'var(--gray-medium)';
    counter.style.textAlign = 'right';
    counter.style.marginTop = '0.25rem';
    
    bioTextarea.parentNode.appendChild(counter);
    
    function updateCounter() {
        const remaining = maxLength - bioTextarea.value.length;
        counter.textContent = `${remaining} characters remaining`;
        counter.style.color = remaining < 50 ? '#ef4444' : 'var(--gray-medium)';
    }
    
    bioTextarea.addEventListener('input', updateCounter);
    updateCounter();
}
</script>
@endsection
