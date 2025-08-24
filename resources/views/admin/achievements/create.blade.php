@extends('admin.layout')

@section('title', 'Add New Achievement')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <a href="{{ route('admin.achievements.index') }}">Achievements</a>
    <i class="fas fa-chevron-right"></i>
    <span>Add New</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Add New Achievement</h1>
        <p class="page-subtitle">Showcase a new award, certification, or professional accomplishment</p>
    </div>
    <div>
        <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Back to Achievements
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <form action="{{ route('admin.achievements.store') }}" method="POST" id="achievementForm">
            @csrf
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-trophy"></i>
                        Achievement Details
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="title" class="form-label required">Achievement Title</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('title') is-invalid @enderror" 
                                    id="title" 
                                    name="title" 
                                    value="{{ old('title') }}" 
                                    placeholder="e.g., Employee of the Year, AWS Certified Solutions Architect"
                                    required
                                >
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category" class="form-label required">Category</label>
                                <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" required>
                                    <option value="">Select category</option>
                                    <option value="award" {{ old('category') == 'award' ? 'selected' : '' }}>Award</option>
                                    <option value="certification" {{ old('category') == 'certification' ? 'selected' : '' }}>Certification</option>
                                    <option value="recognition" {{ old('category') == 'recognition' ? 'selected' : '' }}>Recognition</option>
                                    <option value="competition" {{ old('category') == 'competition' ? 'selected' : '' }}>Competition</option>
                                    <option value="publication" {{ old('category') == 'publication' ? 'selected' : '' }}>Publication</option>
                                    <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="organization" class="form-label">Issuing Organization</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('organization') is-invalid @enderror" 
                                    id="organization" 
                                    name="organization" 
                                    value="{{ old('organization') }}" 
                                    placeholder="e.g., Amazon Web Services, Microsoft, IEEE"
                                >
                                @error('organization')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_received" class="form-label">Date Received</label>
                                <input 
                                    type="date" 
                                    class="form-control @error('date_received') is-invalid @enderror" 
                                    id="date_received" 
                                    name="date_received" 
                                    value="{{ old('date_received') }}"
                                >
                                @error('date_received')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea 
                            class="form-control @error('description') is-invalid @enderror" 
                            id="description" 
                            name="description" 
                            rows="4" 
                            placeholder="Describe the significance of this achievement, what you accomplished, and its impact..."
                        >{{ old('description') }}</textarea>
                        <div class="form-text">
                            <span id="descriptionCount">0</span>/500 characters
                        </div>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location" class="form-label">Location</label>
                        <input 
                            type="text" 
                            class="form-control @error('location') is-invalid @enderror" 
                            id="location" 
                            name="location" 
                            value="{{ old('location') }}" 
                            placeholder="e.g., San Francisco, CA / Virtual Event"
                        >
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-certificate"></i>
                        Credentials & Links
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="credential_id" class="form-label">Credential ID</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('credential_id') is-invalid @enderror" 
                                    id="credential_id" 
                                    name="credential_id" 
                                    value="{{ old('credential_id') }}" 
                                    placeholder="e.g., ABC123456789"
                                >
                                <div class="form-text">The unique identifier for this credential</div>
                                @error('credential_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="certificate_url" class="form-label">Certificate URL</label>
                                <input 
                                    type="url" 
                                    class="form-control @error('certificate_url') is-invalid @enderror" 
                                    id="certificate_url" 
                                    name="certificate_url" 
                                    value="{{ old('certificate_url') }}" 
                                    placeholder="https://example.com/certificate"
                                >
                                <div class="form-text">Link to view or verify the certificate</div>
                                @error('certificate_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input 
                                    type="date" 
                                    class="form-control @error('expiry_date') is-invalid @enderror" 
                                    id="expiry_date" 
                                    name="expiry_date" 
                                    value="{{ old('expiry_date') }}"
                                >
                                <div class="form-text">Leave empty if the credential doesn't expire</div>
                                @error('expiry_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="verification_url" class="form-label">Verification URL</label>
                                <input 
                                    type="url" 
                                    class="form-control @error('verification_url') is-invalid @enderror" 
                                    id="verification_url" 
                                    name="verification_url" 
                                    value="{{ old('verification_url') }}" 
                                    placeholder="https://verify.example.com"
                                >
                                <div class="form-text">Link to verify the credential authenticity</div>
                                @error('verification_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-cogs"></i>
                        Additional Information
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="skills" class="form-label">Related Skills</label>
                        <input 
                            type="text" 
                            class="form-control @error('skills') is-invalid @enderror" 
                            id="skills" 
                            name="skills" 
                            value="{{ old('skills') }}" 
                            placeholder="e.g., AWS, Cloud Computing, Leadership, Project Management"
                        >
                        <div class="form-text">Separate multiple skills with commas</div>
                        @error('skills')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="skills-preview" class="skills-preview mt-2"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="score" class="form-label">Score/Grade</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('score') is-invalid @enderror" 
                                    id="score" 
                                    name="score" 
                                    value="{{ old('score') }}" 
                                    placeholder="e.g., 95%, A+, Pass with Distinction"
                                >
                                @error('score')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="display_order" class="form-label">Display Order</label>
                                <input 
                                    type="number" 
                                    class="form-control @error('display_order') is-invalid @enderror" 
                                    id="display_order" 
                                    name="display_order" 
                                    value="{{ old('display_order', 0) }}" 
                                    min="0"
                                >
                                <div class="form-text">Lower numbers appear first</div>
                                @error('display_order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Save Achievement
                </button>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
            </div>
        </form>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-info-circle"></i>
                    Quick Tips
                </h3>
            </div>
            <div class="card-body">
                <div class="tip-item">
                    <i class="fas fa-trophy"></i>
                    <div>
                        <h5>Achievement Title</h5>
                        <p>Use the exact title as it appears on your certificate or award</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-tag"></i>
                    <div>
                        <h5>Category</h5>
                        <p>Choose the most appropriate category to help organize your achievements</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-building"></i>
                    <div>
                        <h5>Organization</h5>
                        <p>Include the full name of the issuing organization for credibility</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-link"></i>
                    <div>
                        <h5>Verification</h5>
                        <p>Add certificate and verification URLs to allow others to verify your achievement</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-star"></i>
                    <div>
                        <h5>Skills</h5>
                        <p>List relevant skills that this achievement demonstrates</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-eye"></i>
                    Preview
                </h3>
            </div>
            <div class="card-body">
                <div class="achievement-preview">
                    <div class="preview-header">
                        <div class="preview-icon" id="previewIcon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="preview-category" id="previewCategory">
                            <span class="badge badge-award">Award</span>
                        </div>
                    </div>
                    <div class="preview-title" id="previewTitle">Enter achievement title...</div>
                    <div class="preview-organization" id="previewOrganization"></div>
                    <div class="preview-date" id="previewDate"></div>
                    <div class="preview-score" id="previewScore"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-lightbulb"></i>
                    Category Guide
                </h3>
            </div>
            <div class="card-body">
                <div class="category-guide">
                    <div class="category-item">
                        <span class="badge badge-award">Award</span>
                        <p>Professional awards, honors, and recognitions</p>
                    </div>
                    <div class="category-item">
                        <span class="badge badge-certification">Certification</span>
                        <p>Professional certifications and licenses</p>
                    </div>
                    <div class="category-item">
                        <span class="badge badge-recognition">Recognition</span>
                        <p>Public recognition and mentions</p>
                    </div>
                    <div class="category-item">
                        <span class="badge badge-competition">Competition</span>
                        <p>Contest wins and competition achievements</p>
                    </div>
                    <div class="category-item">
                        <span class="badge badge-publication">Publication</span>
                        <p>Published papers, articles, and books</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 2rem;
}

.form-actions {
    margin-top: 2rem;
    display: flex;
    gap: 1rem;
}

.tip-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.tip-item:last-child {
    margin-bottom: 0;
}

.tip-item i {
    color: var(--accent);
    font-size: 1.25rem;
    margin-top: 0.25rem;
}

.tip-item h5 {
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
    color: var(--primary);
}

.tip-item p {
    font-size: 0.8rem;
    color: var(--gray-medium);
    margin: 0;
    line-height: 1.5;
}

.skills-preview {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.skill-tag {
    background: var(--gray-light);
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
}

.achievement-preview {
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 1rem;
    background: #f8fafc;
}

.preview-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
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
    font-size: 1.25rem;
}

.preview-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.5rem;
}

.preview-organization {
    font-size: 1rem;
    font-weight: 500;
    color: var(--accent);
    margin-bottom: 0.5rem;
}

.preview-date {
    font-size: 0.875rem;
    color: var(--gray-dark);
    margin-bottom: 0.5rem;
}

.preview-score {
    font-size: 0.875rem;
    color: var(--gray-dark);
    font-weight: 500;
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.badge-award {
    background: #fef3c7;
    color: #92400e;
}

.badge-certification {
    background: #dbeafe;
    color: #1e40af;
}

.badge-recognition {
    background: #fce7f3;
    color: #be185d;
}

.badge-competition {
    background: #dcfce7;
    color: #166534;
}

.badge-publication {
    background: #f0f4ff;
    color: #4338ca;
}

.badge-other {
    background: #f3f4f6;
    color: #374151;
}

.category-guide {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.category-item {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.category-item p {
    font-size: 0.8rem;
    color: var(--gray-medium);
    margin: 0;
}

@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: stretch;
        gap: 1rem;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .preview-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
}
</style>

<script>
// Character counter for description
document.getElementById('description').addEventListener('input', function(e) {
    const count = e.target.value.length;
    document.getElementById('descriptionCount').textContent = count;
    
    if (count > 500) {
        e.target.setCustomValidity('Description must be less than 500 characters');
    } else {
        e.target.setCustomValidity('');
    }
});

// Skills preview
document.getElementById('skills').addEventListener('input', function(e) {
    const skills = e.target.value.split(',').map(skill => skill.trim()).filter(skill => skill);
    const preview = document.getElementById('skills-preview');
    
    if (skills.length > 0) {
        preview.innerHTML = skills.map(skill => `<span class="skill-tag">${skill}</span>`).join('');
    } else {
        preview.innerHTML = '';
    }
});

// Real-time preview
function updatePreview() {
    const title = document.getElementById('title').value || 'Enter achievement title...';
    const organization = document.getElementById('organization').value;
    const category = document.getElementById('category').value || 'award';
    const dateReceived = document.getElementById('date_received').value;
    const score = document.getElementById('score').value;
    
    document.getElementById('previewTitle').textContent = title;
    
    const organizationPreview = document.getElementById('previewOrganization');
    if (organization) {
        organizationPreview.textContent = organization;
        organizationPreview.style.display = 'block';
    } else {
        organizationPreview.style.display = 'none';
    }
    
    // Update category badge and icon
    const categoryBadge = document.getElementById('previewCategory').querySelector('.badge');
    const icon = document.getElementById('previewIcon').querySelector('i');
    
    categoryBadge.className = `badge badge-${category}`;
    categoryBadge.textContent = category.charAt(0).toUpperCase() + category.slice(1);
    
    // Update icon based on category
    const iconClasses = {
        'award': 'fas fa-trophy',
        'certification': 'fas fa-certificate',
        'recognition': 'fas fa-star',
        'competition': 'fas fa-medal',
        'publication': 'fas fa-book',
        'other': 'fas fa-award'
    };
    icon.className = iconClasses[category] || 'fas fa-trophy';
    
    // Update date
    const datePreview = document.getElementById('previewDate');
    if (dateReceived) {
        const date = new Date(dateReceived).toLocaleDateString('en-US', { year: 'numeric', month: 'long' });
        datePreview.innerHTML = `<i class="fas fa-calendar-alt"></i> ${date}`;
        datePreview.style.display = 'block';
    } else {
        datePreview.style.display = 'none';
    }
    
    // Update score
    const scorePreview = document.getElementById('previewScore');
    if (score) {
        scorePreview.innerHTML = `<i class="fas fa-award"></i> Score: ${score}`;
        scorePreview.style.display = 'block';
    } else {
        scorePreview.style.display = 'none';
    }
}

// Add event listeners for real-time preview
['title', 'organization', 'category', 'date_received', 'score'].forEach(id => {
    document.getElementById(id).addEventListener('input', updatePreview);
});

// Initialize preview
updatePreview();

// Form validation
document.getElementById('achievementForm').addEventListener('submit', function(e) {
    const dateReceived = document.getElementById('date_received').value;
    const expiryDate = document.getElementById('expiry_date').value;
    
    if (dateReceived && expiryDate && new Date(dateReceived) > new Date(expiryDate)) {
        e.preventDefault();
        alert('Date received cannot be after expiry date');
        return false;
    }
});
</script>
@endsection
