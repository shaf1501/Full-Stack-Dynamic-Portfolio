@extends('admin.layout')

@section('title', 'Add New Skill')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <a href="{{ route('admin.skills') }}">Skills</a>
    <i class="fas fa-chevron-right"></i>
    <span>Add New</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Add New Skill</h1>
        <p class="page-subtitle">Add a new skill to your portfolio</p>
    </div>
    <div>
        <a href="{{ route('admin.skills') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Back to Skills
        </a>
    </div>
</div>

<form action="{{ route('admin.skills.store') }}" method="POST" class="skill-form">
    @csrf
    
    <div class="form-grid">
        <div class="main-form">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Skill Information</h3>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Skill Name *</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   class="form-control @error('name') error @enderror" 
                                   value="{{ old('name') }}"
                                   placeholder="e.g., Laravel, JavaScript, Photoshop"
                                   required>
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category" class="form-label">Category *</label>
                            <select id="category" 
                                    name="category" 
                                    class="form-control @error('category') error @enderror" 
                                    required>
                                <option value="">Select a category</option>
                                <option value="Programming Languages" {{ old('category') == 'Programming Languages' ? 'selected' : '' }}>Programming Languages</option>
                                <option value="Web Frameworks" {{ old('category') == 'Web Frameworks' ? 'selected' : '' }}>Web Frameworks</option>
                                <option value="Databases" {{ old('category') == 'Databases' ? 'selected' : '' }}>Databases</option>
                                <option value="DevOps & Cloud" {{ old('category') == 'DevOps & Cloud' ? 'selected' : '' }}>DevOps & Cloud</option>
                                <option value="Design & UI/UX" {{ old('category') == 'Design & UI/UX' ? 'selected' : '' }}>Design & UI/UX</option>
                                <option value="Mobile Development" {{ old('category') == 'Mobile Development' ? 'selected' : '' }}>Mobile Development</option>
                                <option value="Tools & Software" {{ old('category') == 'Tools & Software' ? 'selected' : '' }}>Tools & Software</option>
                                <option value="Other" {{ old('category') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('category')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="level" class="form-label">Proficiency Level *</label>
                        <div class="level-input">
                            <input type="range" 
                                   id="level" 
                                   name="level" 
                                   class="level-slider @error('level') error @enderror" 
                                   min="1" 
                                   max="100" 
                                   value="{{ old('level', 50) }}"
                                   required>
                            <div class="level-display">
                                <span id="levelValue">{{ old('level', 50) }}%</span>
                                <span id="levelText">Intermediate</span>
                            </div>
                        </div>
                        <div class="level-labels">
                            <span>Beginner</span>
                            <span>Intermediate</span>
                            <span>Expert</span>
                        </div>
                        @error('level')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="icon" class="form-label">Icon Class (Optional)</label>
                        <input type="text" 
                               id="icon" 
                               name="icon" 
                               class="form-control @error('icon') error @enderror" 
                               value="{{ old('icon') }}"
                               placeholder="e.g., fab fa-php, fas fa-code, fab fa-js-square">
                        <div class="form-help">
                            Use Font Awesome icon classes. Leave blank for default.
                            <a href="https://fontawesome.com/icons" target="_blank">Browse icons</a>
                        </div>
                        @error('icon')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-form">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Preview</h3>
                </div>
                <div class="card-body">
                    <div class="skill-preview">
                        <div class="preview-header">
                            <div class="preview-icon" id="previewIcon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 id="previewName">Skill Name</h4>
                                <span id="previewCategory">Category</span>
                            </div>
                        </div>
                        <div class="preview-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" id="previewProgress" style="width: 50%"></div>
                            </div>
                            <span id="previewLevel">50%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Quick Tips</h3>
                </div>
                <div class="card-body">
                    <ul class="tips-list">
                        <li><strong>Be honest:</strong> Rate your skills accurately</li>
                        <li><strong>Categories:</strong> Group similar skills together</li>
                        <li><strong>Icons:</strong> Use relevant Font Awesome icons for better visual appeal</li>
                        <li><strong>Level Guide:</strong>
                            <ul>
                                <li>1-30%: Beginner</li>
                                <li>31-70%: Intermediate</li>
                                <li>71-100%: Expert</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i>
                    Create Skill
                </button>
                <a href="{{ route('admin.skills') }}" class="btn btn-secondary btn-block">
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

.skill-form {
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

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.level-input {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.5rem;
}

.level-slider {
    flex: 1;
    height: 6px;
    background: #e2e8f0;
    border-radius: 3px;
    outline: none;
    -webkit-appearance: none;
}

.level-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    background: var(--gradient);
    border-radius: 50%;
    cursor: pointer;
}

.level-slider::-moz-range-thumb {
    width: 20px;
    height: 20px;
    background: var(--gradient);
    border-radius: 50%;
    cursor: pointer;
    border: none;
}

.level-display {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 100px;
}

#levelValue {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--accent);
}

#levelText {
    font-size: 0.75rem;
    color: var(--gray-medium);
    font-weight: 500;
}

.level-labels {
    display: flex;
    justify-content: space-between;
    font-size: 0.75rem;
    color: var(--gray-medium);
}

.form-help {
    font-size: 0.75rem;
    color: var(--gray-medium);
    margin-top: 0.25rem;
}

.form-help a {
    color: var(--accent);
    text-decoration: none;
}

.form-help a:hover {
    text-decoration: underline;
}

.error-message {
    color: #ef4444;
    font-size: 0.75rem;
    margin-top: 0.25rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.skill-preview {
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 1rem;
    background: #fafafa;
}

.preview-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.preview-icon {
    width: 40px;
    height: 40px;
    background: var(--gradient);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 1.2rem;
}

#previewName {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.25rem;
}

#previewCategory {
    font-size: 0.75rem;
    background: #f1f5f9;
    color: var(--accent);
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-weight: 500;
}

.preview-progress {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.progress-bar {
    flex: 1;
    height: 6px;
    background: #e2e8f0;
    border-radius: 3px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    background: var(--gradient);
    border-radius: 3px;
    transition: width 0.3s ease;
}

#previewLevel {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--accent);
    min-width: 40px;
}

.tips-list {
    list-style: none;
    padding: 0;
    space: 0.75rem 0;
}

.tips-list li {
    margin-bottom: 0.75rem;
    font-size: 0.875rem;
    color: var(--gray-dark);
}

.tips-list ul {
    margin-top: 0.5rem;
    margin-left: 1rem;
    list-style: disc;
}

.tips-list ul li {
    color: var(--gray-medium);
    margin-bottom: 0.25rem;
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
    
    .page-header {
        flex-direction: column;
        align-items: stretch;
        gap: 1rem;
    }
    
    .level-input {
        flex-direction: column;
        align-items: stretch;
    }
    
    .level-display {
        align-items: flex-start;
    }
}
</style>

<script>
// Real-time preview updates
const nameInput = document.getElementById('name');
const categorySelect = document.getElementById('category');
const levelSlider = document.getElementById('level');
const iconInput = document.getElementById('icon');

const previewName = document.getElementById('previewName');
const previewCategory = document.getElementById('previewCategory');
const previewProgress = document.getElementById('previewProgress');
const previewLevel = document.getElementById('previewLevel');
const previewIcon = document.getElementById('previewIcon');

const levelValue = document.getElementById('levelValue');
const levelText = document.getElementById('levelText');

// Update preview name
nameInput.addEventListener('input', function() {
    previewName.textContent = this.value || 'Skill Name';
});

// Update preview category
categorySelect.addEventListener('change', function() {
    previewCategory.textContent = this.value || 'Category';
});

// Update level display and preview
levelSlider.addEventListener('input', function() {
    const value = parseInt(this.value);
    levelValue.textContent = value + '%';
    previewLevel.textContent = value + '%';
    previewProgress.style.width = value + '%';
    
    // Update level text
    if (value <= 30) {
        levelText.textContent = 'Beginner';
    } else if (value <= 70) {
        levelText.textContent = 'Intermediate';
    } else {
        levelText.textContent = 'Expert';
    }
});

// Update preview icon
iconInput.addEventListener('input', function() {
    const iconClass = this.value;
    const iconElement = previewIcon.querySelector('i');
    
    if (iconClass) {
        iconElement.className = iconClass;
    } else {
        iconElement.className = 'fas fa-tools';
    }
});

// Form submission handling
document.querySelector('.skill-form').addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.classList.add('loading');
    submitBtn.disabled = true;
});

// Initialize preview
document.addEventListener('DOMContentLoaded', function() {
    // Trigger initial updates
    nameInput.dispatchEvent(new Event('input'));
    categorySelect.dispatchEvent(new Event('change'));
    levelSlider.dispatchEvent(new Event('input'));
    iconInput.dispatchEvent(new Event('input'));
});
</script>
@endsection
