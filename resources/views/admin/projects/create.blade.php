@extends('admin.layout')

@section('title', 'Add New Project')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <a href="{{ route('admin.projects') }}">Projects</a>
    <i class="fas fa-chevron-right"></i>
    <span>Add New</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Add New Project</h1>
        <p class="page-subtitle">Create a new project entry for your portfolio</p>
    </div>
    <div>
        <a href="{{ route('admin.projects') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Back to Projects
        </a>
    </div>
</div>

<form action="{{ route('admin.projects.store') }}" method="POST" class="project-form">
    @csrf
    
    <div class="form-grid">
        <div class="main-form">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project Information</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="form-label">Project Title *</label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               class="form-control @error('title') error @enderror" 
                               value="{{ old('title') }}"
                               placeholder="Enter project title"
                               required>
                        @error('title')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Description *</label>
                        <textarea id="description" 
                                  name="description" 
                                  class="form-control @error('description') error @enderror" 
                                  rows="6"
                                  placeholder="Describe your project in detail..."
                                  required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="technologies" class="form-label">Technologies Used *</label>
                        <input type="text" 
                               id="technologies" 
                               name="technologies" 
                               class="form-control @error('technologies') error @enderror" 
                               value="{{ old('technologies') }}"
                               placeholder="e.g., Laravel, Vue.js, MySQL, Docker"
                               required>
                        <div class="form-help">Separate technologies with commas</div>
                        @error('technologies')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project Links</h3>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="github_link" class="form-label">GitHub Repository</label>
                            <input type="url" 
                                   id="github_link" 
                                   name="github_link" 
                                   class="form-control @error('github_link') error @enderror" 
                                   value="{{ old('github_link') }}"
                                   placeholder="https://github.com/username/repository">
                            @error('github_link')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="live_link" class="form-label">Live Demo</label>
                            <input type="url" 
                                   id="live_link" 
                                   name="live_link" 
                                   class="form-control @error('live_link') error @enderror" 
                                   value="{{ old('live_link') }}"
                                   placeholder="https://your-project.com">
                            @error('live_link')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-form">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project Settings</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="status" class="form-label">Status *</label>
                        <select id="status" 
                                name="status" 
                                class="form-control @error('status') error @enderror" 
                                required>
                            <option value="">Select status</option>
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Project Image</label>
                        <input type="text" 
                               id="image" 
                               name="image" 
                               class="form-control @error('image') error @enderror" 
                               value="{{ old('image') }}"
                               placeholder="Image URL or path">
                        <div class="form-help">You can use an image URL or upload to your server</div>
                        @error('image')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i>
                    Create Project
                </button>
                <a href="{{ route('admin.projects') }}" class="btn btn-secondary btn-block">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
            </div>
        </div>
    </div>
</form>

<style>
.page-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 2rem;
}

.project-form {
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
    min-height: 120px;
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

.form-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-top: 2rem;
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
    
    .page-header {
        flex-direction: column;
        align-items: stretch;
        gap: 1rem;
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
document.querySelector('.project-form').addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.classList.add('loading');
    submitBtn.disabled = true;
});

// Auto-resize textarea
const textarea = document.getElementById('description');
textarea.addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
});

// Technology tags input enhancement
const techInput = document.getElementById('technologies');
let techTimeout;

techInput.addEventListener('input', function() {
    clearTimeout(techTimeout);
    techTimeout = setTimeout(() => {
        const value = this.value;
        const tags = value.split(',').map(tag => tag.trim()).filter(tag => tag);
        
        // You could add visual feedback here, like showing tag previews
        console.log('Technologies:', tags);
    }, 500);
});
</script>
@endsection
