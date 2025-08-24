@extends('admin.layout')

@section('title', 'Edit Achievement')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <a href="{{ route('admin.achievements.index') }}">Achievements</a>
    <i class="fas fa-chevron-right"></i>
    <span>Edit</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Edit Achievement</h1>
        <p class="page-subtitle">Update your achievement details</p>
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
        <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST" id="achievementForm">
            @csrf
            @method('PUT')
            
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
                                    value="{{ old('title', $achievement->title) }}" 
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
                                    <option value="award" {{ old('category', $achievement->category) == 'award' ? 'selected' : '' }}>Award</option>
                                    <option value="certification" {{ old('category', $achievement->category) == 'certification' ? 'selected' : '' }}>Certification</option>
                                    <option value="recognition" {{ old('category', $achievement->category) == 'recognition' ? 'selected' : '' }}>Recognition</option>
                                    <option value="competition" {{ old('category', $achievement->category) == 'competition' ? 'selected' : '' }}>Competition</option>
                                    <option value="publication" {{ old('category', $achievement->category) == 'publication' ? 'selected' : '' }}>Publication</option>
                                    <option value="other" {{ old('category', $achievement->category) == 'other' ? 'selected' : '' }}>Other</option>
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
                                    value="{{ old('organization', $achievement->organization) }}" 
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
                                    value="{{ old('date_received', $achievement->date_received ? $achievement->date_received->format('Y-m-d') : '') }}"
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
                        >{{ old('description', $achievement->description) }}</textarea>
                        <div class="form-text">
                            <span id="descriptionCount">{{ old('description', $achievement->description) ? strlen(old('description', $achievement->description)) : 0 }}</span>/500 characters
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
                            value="{{ old('location', $achievement->location) }}" 
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
                                    value="{{ old('credential_id', $achievement->credential_id) }}" 
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
                                    value="{{ old('certificate_url', $achievement->certificate_url) }}" 
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
                                    value="{{ old('expiry_date', $achievement->expiry_date ? $achievement->expiry_date->format('Y-m-d') : '') }}"
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
                                    value="{{ old('verification_url', $achievement->verification_url) }}" 
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
                            value="{{ old('skills', $achievement->skills) }}" 
                            placeholder="e.g., AWS, Cloud Computing, Leadership, Project Management"
                        >
                        <div class="form-text">Separate multiple skills with commas</div>
                        @error('skills')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="skills-preview" class="skills-preview mt-2">
                            @if($achievement->skills)
                                @foreach(explode(',', $achievement->skills) as $skill)
                                    <span class="skill-tag">{{ trim($skill) }}</span>
                                @endforeach
                            @endif
                        </div>
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
                                    value="{{ old('score', $achievement->score) }}" 
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
                                    value="{{ old('display_order', $achievement->display_order) }}" 
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
                    Update Achievement
                </button>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
                <button type="button" class="btn btn-danger ms-auto" onclick="deleteAchievement()">
                    <i class="fas fa-trash"></i>
                    Delete Achievement
                </button>
            </div>
        </form>
        
        <!-- Hidden delete form -->
        <form id="deleteForm" action="{{ route('admin.achievements.destroy', $achievement->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-info-circle"></i>
                    Achievement Info
                </h3>
            </div>
            <div class="card-body">
                <div class="info-item">
                    <strong>Created:</strong>
                    <span>{{ $achievement->created_at->format('M d, Y') }}</span>
                </div>
                <div class="info-item">
                    <strong>Last Updated:</strong>
                    <span>{{ $achievement->updated_at->format('M d, Y') }}</span>
                </div>
                <div class="info-item">
                    <strong>Category:</strong>
                    <span class="badge badge-{{ $achievement->category }}">
                        {{ ucfirst($achievement->category) }}
                    </span>
                </div>
                @if($achievement->expiry_date)
                    <div class="info-item">
                        <strong>Status:</strong>
                        <span class="badge badge-{{ $achievement->expiry_date > now() ? 'success' : 'danger' }}">
                            {{ $achievement->expiry_date > now() ? 'Valid' : 'Expired' }}
                        </span>
                    </div>
                @endif
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
                            @switch($achievement->category)
                                @case('award')
                                    <i class="fas fa-trophy"></i>
                                    @break
                                @case('certification')
                                    <i class="fas fa-certificate"></i>
                                    @break
                                @case('recognition')
                                    <i class="fas fa-star"></i>
                                    @break
                                @case('competition')
                                    <i class="fas fa-medal"></i>
                                    @break
                                @case('publication')
                                    <i class="fas fa-book"></i>
                                    @break
                                @default
                                    <i class="fas fa-award"></i>
                            @endswitch
                        </div>
                        <div class="preview-category" id="previewCategory">
                            <span class="badge badge-{{ $achievement->category }}">{{ ucfirst($achievement->category) }}</span>
                        </div>
                    </div>
                    <div class="preview-title" id="previewTitle">{{ $achievement->title }}</div>
                    @if($achievement->organization)
                        <div class="preview-organization" id="previewOrganization">{{ $achievement->organization }}</div>
                    @else
                        <div class="preview-organization" id="previewOrganization" style="display: none;"></div>
                    @endif
                    @if($achievement->date_received)
                        <div class="preview-date" id="previewDate">
                            <i class="fas fa-calendar-alt"></i> {{ $achievement->date_received->format('F Y') }}
                        </div>
                    @else
                        <div class="preview-date" id="previewDate" style="display: none;"></div>
                    @endif
                    @if($achievement->score)
                        <div class="preview-score" id="previewScore">
                            <i class="fas fa-award"></i> Score: {{ $achievement->score }}
                        </div>
                    @else
                        <div class="preview-score" id="previewScore" style="display: none;"></div>
                    @endif
                </div>
            </div>
        </div>

        @if($achievement->certificate_url || $achievement->verification_url || $achievement->credential_id)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-link"></i>
                        Quick Links
                    </h3>
                </div>
                <div class="card-body">
                    @if($achievement->certificate_url)
                        <a href="{{ $achievement->certificate_url }}" target="_blank" class="btn btn-outline-primary btn-sm mb-2">
                            <i class="fas fa-certificate"></i>
                            View Certificate
                        </a><br>
                    @endif
                    @if($achievement->verification_url)
                        <a href="{{ $achievement->verification_url }}" target="_blank" class="btn btn-outline-secondary btn-sm mb-2">
                            <i class="fas fa-check-circle"></i>
                            Verify Credential
                        </a><br>
                    @endif
                    @if($achievement->credential_id)
                        <div class="credential-info">
                            <small class="text-muted">Credential ID:</small><br>
                            <code>{{ $achievement->credential_id }}</code>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-lightbulb"></i>
                    Quick Tips
                </h3>
            </div>
            <div class="card-body">
                <div class="tip-item">
                    <i class="fas fa-star"></i>
                    <div>
                        <h5>Keep It Current</h5>
                        <p>Update expiry dates and renew certifications to maintain credibility</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-link"></i>
                    <div>
                        <h5>Verification Links</h5>
                        <p>Add verification URLs to allow others to confirm your achievements</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-sort"></i>
                    <div>
                        <h5>Display Order</h5>
                        <p>Use display order to prioritize your most important achievements</p>
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
    align-items: center;
}

.ms-auto {
    margin-left: auto;
}

.info-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid #e2e8f0;
}

.info-item:last-child {
    border-bottom: none;
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

.badge-success {
    background: #dcfce7;
    color: #166534;
}

.badge-danger {
    background: #fee2e2;
    color: #dc2626;
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

.credential-info {
    margin-top: 1rem;
    padding: 0.75rem;
    background: #f8fafc;
    border-radius: 4px;
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
    
    .ms-auto {
        margin-left: 0;
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

// Delete function
function deleteAchievement() {
    if (confirm('Are you sure you want to delete this achievement? This action cannot be undone.')) {
        document.getElementById('deleteForm').submit();
    }
}
</script>
@endsection
