@extends('admin.layout')

@section('title', 'Add New Education')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <a href="{{ route('admin.educations.index') }}">Education</a>
    <i class="fas fa-chevron-right"></i>
    <span>Add New</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Add New Education</h1>
        <p class="page-subtitle">Add a new educational qualification to your portfolio</p>
    </div>
    <div>
        <a href="{{ route('admin.educations.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Back to Education
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <form action="{{ route('admin.educations.store') }}" method="POST" id="educationForm">
            @csrf
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-graduation-cap"></i>
                        Education Details
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="degree" class="form-label required">Degree/Qualification</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('degree') is-invalid @enderror" 
                                    id="degree" 
                                    name="degree" 
                                    value="{{ old('degree') }}" 
                                    placeholder="e.g., Bachelor of Science, Master of Arts"
                                    required
                                >
                                @error('degree')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="institution" class="form-label required">Institution</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('institution') is-invalid @enderror" 
                                    id="institution" 
                                    name="institution" 
                                    value="{{ old('institution') }}" 
                                    placeholder="e.g., Harvard University, MIT"
                                    required
                                >
                                @error('institution')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field_of_study" class="form-label">Field of Study</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('field_of_study') is-invalid @enderror" 
                                    id="field_of_study" 
                                    name="field_of_study" 
                                    value="{{ old('field_of_study') }}" 
                                    placeholder="e.g., Computer Science, Business Administration"
                                >
                                @error('field_of_study')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="grade" class="form-label">Grade/GPA</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('grade') is-invalid @enderror" 
                                    id="grade" 
                                    name="grade" 
                                    value="{{ old('grade') }}" 
                                    placeholder="e.g., 3.8/4.0, First Class, A+"
                                >
                                @error('grade')
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
                                    value="{{ old('start_date') }}" 
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
                                    value="{{ old('end_date') }}"
                                >
                                <div class="form-text">Leave empty if currently studying</div>
                                @error('end_date')
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
                            rows="5" 
                            placeholder="Describe your achievements, coursework, projects, or relevant activities..."
                        >{{ old('description') }}</textarea>
                        <div class="form-text">
                            <span id="descriptionCount">0</span>/500 characters
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
                        <i class="fas fa-cog"></i>
                        Additional Settings
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="location" class="form-label">Location</label>
                        <input 
                            type="text" 
                            class="form-control @error('location') is-invalid @enderror" 
                            id="location" 
                            name="location" 
                            value="{{ old('location') }}" 
                            placeholder="e.g., Cambridge, MA, USA"
                        >
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Currently Studying</option>
                                    <option value="dropped" {{ old('status') == 'dropped' ? 'selected' : '' }}>Dropped Out</option>
                                </select>
                                @error('status')
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
                    Save Education
                </button>
                <a href="{{ route('admin.educations.index') }}" class="btn btn-secondary">
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
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <h5>Degree Title</h5>
                        <p>Include the full official degree name as it appears on your certificate</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-university"></i>
                    <div>
                        <h5>Institution</h5>
                        <p>Use the official name of your educational institution</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-calendar"></i>
                    <div>
                        <h5>Dates</h5>
                        <p>Leave end date empty if you're currently studying</p>
                    </div>
                </div>
                <div class="tip-item">
                    <i class="fas fa-star"></i>
                    <div>
                        <h5>Description</h5>
                        <p>Highlight key achievements, relevant coursework, or notable projects</p>
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
                <div class="education-preview">
                    <div class="preview-degree" id="previewDegree">Enter degree name...</div>
                    <div class="preview-institution" id="previewInstitution">Enter institution name...</div>
                    <div class="preview-field" id="previewField"></div>
                    <div class="preview-period" id="previewPeriod">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Select dates...</span>
                    </div>
                    <div class="preview-grade" id="previewGrade"></div>
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

.education-preview {
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 1rem;
    background: #f8fafc;
}

.preview-degree {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.5rem;
}

.preview-institution {
    font-size: 1rem;
    font-weight: 500;
    color: var(--accent);
    margin-bottom: 0.5rem;
}

.preview-field {
    color: var(--gray-medium);
    font-style: italic;
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

.preview-grade {
    font-size: 0.875rem;
    color: var(--gray-dark);
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

// Real-time preview
function updatePreview() {
    const degree = document.getElementById('degree').value || 'Enter degree name...';
    const institution = document.getElementById('institution').value || 'Enter institution name...';
    const fieldOfStudy = document.getElementById('field_of_study').value;
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    const grade = document.getElementById('grade').value;
    
    document.getElementById('previewDegree').textContent = degree;
    document.getElementById('previewInstitution').textContent = institution;
    
    const fieldPreview = document.getElementById('previewField');
    if (fieldOfStudy) {
        fieldPreview.textContent = fieldOfStudy;
        fieldPreview.style.display = 'block';
    } else {
        fieldPreview.style.display = 'none';
    }
    
    // Format dates
    let dateText = 'Select dates...';
    if (startDate) {
        const start = new Date(startDate).toLocaleDateString('en-US', { year: 'numeric', month: 'short' });
        const end = endDate ? new Date(endDate).toLocaleDateString('en-US', { year: 'numeric', month: 'short' }) : 'Present';
        dateText = `${start} - ${end}`;
    }
    document.getElementById('previewPeriod').querySelector('span').textContent = dateText;
    
    const gradePreview = document.getElementById('previewGrade');
    if (grade) {
        gradePreview.innerHTML = `<i class="fas fa-award"></i> Grade: ${grade}`;
        gradePreview.style.display = 'block';
    } else {
        gradePreview.style.display = 'none';
    }
}

// Add event listeners for real-time preview
['degree', 'institution', 'field_of_study', 'start_date', 'end_date', 'grade'].forEach(id => {
    document.getElementById(id).addEventListener('input', updatePreview);
});

// Initialize preview
updatePreview();

// Form validation
document.getElementById('educationForm').addEventListener('submit', function(e) {
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    
    if (startDate && endDate && new Date(startDate) > new Date(endDate)) {
        e.preventDefault();
        alert('Start date cannot be after end date');
        return false;
    }
});
</script>
@endsection
