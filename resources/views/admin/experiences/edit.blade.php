@extends('admin.layout')

@section('title', 'Edit Experience')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <a href="{{ route('admin.experiences.index') }}">Experience</a>
    <i class="fas fa-chevron-right"></i>
    <span>Edit</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Edit Experience</h1>
        <p class="page-subtitle">Update your work experience details</p>
    </div>
    <div>
        <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Back to Experience
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <form action="{{ route('admin.experiences.update', $experience->id) }}" method="POST" id="experienceForm">
            @csrf
            @method('PUT')
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-briefcase"></i>
                        Job Details
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position" class="form-label required">Job Title/Position</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('position') is-invalid @enderror" 
                                    id="position" 
                                    name="position" 
                                    value="{{ old('position', $experience->position) }}" 
                                    placeholder="e.g., Senior Software Engineer"
                                    required
                                >
                                @error('position')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name" class="form-label required">Company Name</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('company_name') is-invalid @enderror" 
                                    id="company_name" 
                                    name="company_name" 
                                    value="{{ old('company_name', $experience->company_name) }}" 
                                    placeholder="e.g., Google Inc."
                                    required
                                >
                                @error('company_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="employment_type" class="form-label">Employment Type</label>
                                <select class="form-control @error('employment_type') is-invalid @enderror" id="employment_type" name="employment_type">
                                    <option value="">Select employment type</option>
                                    <option value="full-time" {{ old('employment_type', $experience->employment_type) == 'full-time' ? 'selected' : '' }}>Full-time</option>
                                    <option value="part-time" {{ old('employment_type', $experience->employment_type) == 'part-time' ? 'selected' : '' }}>Part-time</option>
                                    <option value="contract" {{ old('employment_type', $experience->employment_type) == 'contract' ? 'selected' : '' }}>Contract</option>
                                    <option value="freelance" {{ old('employment_type', $experience->employment_type) == 'freelance' ? 'selected' : '' }}>Freelance</option>
                                    <option value="internship" {{ old('employment_type', $experience->employment_type) == 'internship' ? 'selected' : '' }}>Internship</option>
                                </select>
                                @error('employment_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('location') is-invalid @enderror" 
                                    id="location" 
                                    name="location" 
                                    value="{{ old('location', $experience->location) }}" 
                                    placeholder="e.g., New York, NY / Remote"
                                >
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date" class="form-label required">Start Date</label>
                                <input 
                                    type="date" 
                                    class="form-control @error('start_date') is-invalid @enderror" 
                                    id="start_date" 
                                    name="start_date" 
                                    value="{{ old('start_date', $experience->start_date ? $experience->start_date->format('Y-m-d') : '') }}" 
                                    required
                                >
                                @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date" class="form-label">End Date</label>
                                <input 
                                    type="date" 
                                    class="form-control @error('end_date') is-invalid @enderror" 
                                    id="end_date" 
                                    name="end_date" 
                                    value="{{ old('end_date', $experience->end_date ? $experience->end_date->format('Y-m-d') : '') }}"
                                >
                                <div class="form-text">Leave empty if currently working</div>
                                @error('end_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Job Description</label>
                        <textarea 
                            class="form-control @error('description') is-invalid @enderror" 
                            id="description" 
                            name="description" 
                            rows="6" 
                            placeholder="Describe your responsibilities, achievements, and key contributions..."
                        >{{ old('description', $experience->description) }}</textarea>
                        <div class="form-text">
                            <span id="descriptionCount">{{ old('description', $experience->description) ? strlen(old('description', $experience->description)) : 0 }}</span>/1000 characters
                        </div>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-cogs"></i>
                        Skills & Technologies
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="technologies" class="form-label">Technologies Used</label>
                        <input 
                            type="text" 
                            class="form-control @error('technologies') is-invalid @enderror" 
                            id="technologies" 
                            name="technologies" 
                            value="{{ old('technologies', $experience->technologies) }}" 
                            placeholder="e.g., JavaScript, React, Node.js, Python, AWS"
                        >
                        <div class="form-text">Separate multiple technologies with commas</div>
                        @error('technologies')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="tech-preview" class="tech-preview mt-2">
                            @if($experience->technologies)
                                @foreach(explode(',', $experience->technologies) as $tech)
                                    <span class="tech-tag">{{ trim($tech) }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="key_achievements" class="form-label">Key Achievements</label>
                        <textarea 
                            class="form-control @error('key_achievements') is-invalid @enderror" 
                            id="key_achievements" 
                            name="key_achievements" 
                            rows="4" 
                            placeholder="List your major accomplishments and achievements in this role..."
                        >{{ old('key_achievements', $experience->key_achievements) }}</textarea>
                        @error('key_achievements')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-cog"></i>
                        Additional Settings
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_website" class="form-label">Company Website</label>
                                <input 
                                    type="url" 
                                    class="form-control @error('company_website') is-invalid @enderror" 
                                    id="company_website" 
                                    name="company_website" 
                                    value="{{ old('company_website', $experience->company_website) }}" 
                                    placeholder="https://company.com"
                                >
                                @error('company_website')
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
                                    value="{{ old('display_order', $experience->display_order) }}" 
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
                    Update Experience
                </button>
                <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
                <button type="button" class="btn btn-danger ms-auto" onclick="deleteExperience()">
                    <i class="fas fa-trash"></i>
                    Delete Experience
                </button>
            </div>
        </form>
        
        <!-- Hidden delete form -->
        <form id="deleteForm" action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-info-circle"></i>
                    Experience Info
                </h3>
            </div>
            <div class="card-body">
                <div class="info-item">
                    <strong>Created:</strong>
                    <span>{{ $experience->created_at->format('M d, Y') }}</span>
                </div>
                <div class="info-item">
                    <strong>Last Updated:</strong>
                    <span>{{ $experience->updated_at->format('M d, Y') }}</span>
                </div>
                <div class="info-item">
                    <strong>Duration:</strong>
                    <span>
                        @php
                            $start = \Carbon\Carbon::parse($experience->start_date);
                            $end = $experience->end_date ? \Carbon\Carbon::parse($experience->end_date) : \Carbon\Carbon::now();
                            $duration = $start->diff($end);
                            $years = $duration->y;
                            $months = $duration->m;
                            
                            if ($years > 0 && $months > 0) {
                                echo "{$years} year" . ($years > 1 ? 's' : '') . ", {$months} month" . ($months > 1 ? 's' : '');
                            } elseif ($years > 0) {
                                echo "{$years} year" . ($years > 1 ? 's' : '');
                            } elseif ($months > 0) {
                                echo "{$months} month" . ($months > 1 ? 's' : '');
                            } else {
                                echo "Less than a month";
                            }
                        @endphp
                    </span>
                </div>
                @if($experience->employment_type)
                    <div class="info-item">
                        <strong>Type:</strong>
                        <span class="badge badge-{{ $experience->employment_type == 'full-time' ? 'success' : ($experience->employment_type == 'part-time' ? 'warning' : 'info') }}">
                            {{ ucwords(str_replace('-', ' ', $experience->employment_type)) }}
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
                <div class="experience-preview">
                    <div class="preview-position" id="previewPosition">{{ $experience->position }}</div>
                    <div class="preview-company" id="previewCompany">{{ $experience->company_name }}</div>
                    @if($experience->location)
                        <div class="preview-location" id="previewLocation">
                            <i class="fas fa-map-marker-alt"></i> {{ $experience->location }}
                        </div>
                    @else
                        <div class="preview-location" id="previewLocation" style="display: none;"></div>
                    @endif
                    <div class="preview-period" id="previewPeriod">
                        <i class="fas fa-calendar-alt"></i>
                        <span>
                            {{ $experience->start_date ? $experience->start_date->format('M Y') : 'N/A' }} - 
                            {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                        </span>
                    </div>
                    @if($experience->employment_type)
                        <div class="preview-employment" id="previewEmployment">
                            <span class="badge badge-{{ $experience->employment_type == 'full-time' ? 'success' : ($experience->employment_type == 'part-time' ? 'warning' : 'info') }}">
                                {{ strtoupper(str_replace('-', ' ', $experience->employment_type)) }}
                            </span>
                        </div>
                    @else
                        <div class="preview-employment" id="previewEmployment" style="display: none;"></div>
                    @endif
                    <div class="preview-duration" id="previewDuration">
                        @php
                            $start = \Carbon\Carbon::parse($experience->start_date);
                            $end = $experience->end_date ? \Carbon\Carbon::parse($experience->end_date) : \Carbon\Carbon::now();
                            $duration = $start->diff($end);
                            $years = $duration->y;
                            $months = $duration->m;
                            
                            if ($years > 0 && $months > 0) {
                                echo "{$years} year" . ($years > 1 ? 's' : '') . ", {$months} month" . ($months > 1 ? 's' : '');
                            } elseif ($years > 0) {
                                echo "{$years} year" . ($years > 1 ? 's' : '');
                            } elseif ($months > 0) {
                                echo "{$months} month" . ($months > 1 ? 's' : '');
                            } else {
                                echo "Less than a month";
                            }
                        @endphp
                    </div>
                </div>
            </div>
        </div>

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
                        <h5>Impact Focus</h5>
                        <p>Emphasize your achievements and the impact you made in this role</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-code"></i>
                    <div>
                        <h5>Technology Stack</h5>
                        <p>Keep your technology list updated with the latest tools you used</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-sort"></i>
                    <div>
                        <h5>Display Order</h5>
                        <p>Use display order to control how this appears relative to other experiences</p>
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

.badge-success {
    background: #dcfce7;
    color: #166534;
}

.badge-warning {
    background: #fef3c7;
    color: #92400e;
}

.badge-info {
    background: #dbeafe;
    color: #1e40af;
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

.tech-preview {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tech-tag {
    background: var(--gray-light);
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
}

.experience-preview {
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 1rem;
    background: #f8fafc;
}

.preview-position {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.5rem;
}

.preview-company {
    font-size: 1rem;
    font-weight: 500;
    color: var(--accent);
    margin-bottom: 0.5rem;
}

.preview-location {
    color: var(--gray-medium);
    font-size: 0.875rem;
    margin-bottom: 0.5rem;
}

.preview-period {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    color: var(--gray-dark);
    margin-bottom: 0.5rem;
}

.preview-period i {
    color: var(--accent);
}

.preview-employment {
    margin-bottom: 0.5rem;
}

.preview-duration {
    font-size: 0.875rem;
    color: var(--gray-medium);
    font-style: italic;
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
}
</style>

<script>
// Character counter for description
document.getElementById('description').addEventListener('input', function(e) {
    const count = e.target.value.length;
    document.getElementById('descriptionCount').textContent = count;
    
    if (count > 1000) {
        e.target.setCustomValidity('Description must be less than 1000 characters');
    } else {
        e.target.setCustomValidity('');
    }
});

// Technologies preview
document.getElementById('technologies').addEventListener('input', function(e) {
    const technologies = e.target.value.split(',').map(tech => tech.trim()).filter(tech => tech);
    const preview = document.getElementById('tech-preview');
    
    if (technologies.length > 0) {
        preview.innerHTML = technologies.map(tech => `<span class="tech-tag">${tech}</span>`).join('');
    } else {
        preview.innerHTML = '';
    }
});

// Real-time preview
function updatePreview() {
    const position = document.getElementById('position').value || 'Enter job title...';
    const company = document.getElementById('company_name').value || 'Enter company name...';
    const location = document.getElementById('location').value;
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    const employmentType = document.getElementById('employment_type').value;
    
    document.getElementById('previewPosition').textContent = position;
    document.getElementById('previewCompany').textContent = company;
    
    const locationPreview = document.getElementById('previewLocation');
    if (location) {
        locationPreview.innerHTML = `<i class="fas fa-map-marker-alt"></i> ${location}`;
        locationPreview.style.display = 'block';
    } else {
        locationPreview.style.display = 'none';
    }
    
    // Format dates and calculate duration
    let dateText = 'Select dates...';
    let durationText = '';
    if (startDate) {
        const start = new Date(startDate).toLocaleDateString('en-US', { year: 'numeric', month: 'short' });
        const end = endDate ? new Date(endDate).toLocaleDateString('en-US', { year: 'numeric', month: 'short' }) : 'Present';
        dateText = `${start} - ${end}`;
        
        // Calculate duration
        const startDateObj = new Date(startDate);
        const endDateObj = endDate ? new Date(endDate) : new Date();
        const diffTime = Math.abs(endDateObj - startDateObj);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        const years = Math.floor(diffDays / 365);
        const months = Math.floor((diffDays % 365) / 30);
        
        if (years > 0 && months > 0) {
            durationText = `${years} year${years > 1 ? 's' : ''}, ${months} month${months > 1 ? 's' : ''}`;
        } else if (years > 0) {
            durationText = `${years} year${years > 1 ? 's' : ''}`;
        } else if (months > 0) {
            durationText = `${months} month${months > 1 ? 's' : ''}`;
        } else {
            durationText = 'Less than a month';
        }
    }
    
    document.getElementById('previewPeriod').querySelector('span').textContent = dateText;
    
    const employmentPreview = document.getElementById('previewEmployment');
    if (employmentType) {
        const badgeClass = employmentType === 'full-time' ? 'success' : (employmentType === 'part-time' ? 'warning' : 'info');
        employmentPreview.innerHTML = `<span class="badge badge-${badgeClass}">${employmentType.replace('-', ' ').toUpperCase()}</span>`;
        employmentPreview.style.display = 'block';
    } else {
        employmentPreview.style.display = 'none';
    }
    
    document.getElementById('previewDuration').textContent = durationText;
}

// Add event listeners for real-time preview
['position', 'company_name', 'location', 'start_date', 'end_date', 'employment_type'].forEach(id => {
    document.getElementById(id).addEventListener('input', updatePreview);
});

// Form validation
document.getElementById('experienceForm').addEventListener('submit', function(e) {
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    
    if (startDate && endDate && new Date(startDate) > new Date(endDate)) {
        e.preventDefault();
        alert('Start date cannot be after end date');
        return false;
    }
});

// Delete function
function deleteExperience() {
    if (confirm('Are you sure you want to delete this experience? This action cannot be undone.')) {
        document.getElementById('deleteForm').submit();
    }
}
</script>
@endsection
