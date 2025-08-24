@extends('admin.layout')

@section('title', 'Education Management')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <span>Education</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Education Management</h1>
        <p class="page-subtitle">Manage your educational background and qualifications</p>
    </div>
    <div>
        <a href="{{ route('admin.educations.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Add New Education
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-graduation-cap"></i>
            All Education Records ({{ $educations->total() }})
        </h3>
        <div class="card-actions">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search education..." id="searchInput">
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($educations->count() > 0)
            <div class="education-grid">
                @foreach($educations as $education)
                    <div class="education-card">
                        <div class="education-header">
                            <div class="education-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="education-actions">
                                <a href="{{ route('admin.educations.edit', $education->id) }}" class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.educations.destroy', $education->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this education record?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="education-content">
                            <h4 class="education-degree">{{ $education->degree }}</h4>
                            <h5 class="education-institution">{{ $education->institution }}</h5>
                            @if($education->field_of_study)
                                <p class="education-field">{{ $education->field_of_study }}</p>
                            @endif
                            <div class="education-period">
                                <i class="fas fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($education->start_date)->format('M Y') }} - 
                                {{ $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('M Y') : 'Present' }}
                            </div>
                            @if($education->grade)
                                <div class="education-grade">
                                    <i class="fas fa-award"></i>
                                    Grade: {{ $education->grade }}
                                </div>
                            @endif
                            @if($education->description)
                                <p class="education-description">{{ Str::limit($education->description, 100) }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $educations->links() }}
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-graduation-cap"></i>
                <h4>No education records found</h4>
                <p>Start building your education history by adding your first record</p>
                <a href="{{ route('admin.educations.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Your First Education
                </a>
            </div>
        @endif
    </div>
</div>

<style>
.page-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 2rem;
}

.card-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.search-box {
    position: relative;
    display: flex;
    align-items: center;
}

.search-box i {
    position: absolute;
    left: 12px;
    color: var(--gray-medium);
}

.search-box input {
    padding: 0.5rem 0.75rem 0.5rem 2.5rem;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 0.875rem;
    width: 250px;
}

.search-box input:focus {
    outline: none;
    border-color: var(--accent);
}

.education-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 2rem;
}

.education-card {
    background: var(--white);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.education-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.education-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.education-icon {
    width: 48px;
    height: 48px;
    background: var(--gradient);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 1.5rem;
}

.education-actions {
    display: flex;
    gap: 0.5rem;
}

.education-degree {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.5rem;
}

.education-institution {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 0.5rem;
}

.education-field {
    color: var(--gray-medium);
    margin-bottom: 1rem;
    font-style: italic;
}

.education-period, .education-grade {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    color: var(--gray-dark);
    margin-bottom: 0.5rem;
}

.education-period i, .education-grade i {
    color: var(--accent);
}

.education-description {
    color: var(--gray-medium);
    font-size: 0.875rem;
    line-height: 1.6;
    margin-top: 1rem;
}

.pagination-wrapper {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
}

.empty-state {
    text-align: center;
    padding: 3rem;
    color: var(--gray-medium);
}

.empty-state i {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    opacity: 0.5;
}

.empty-state h4 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--primary);
}

.empty-state p {
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: stretch;
        gap: 1rem;
    }
    
    .search-box input {
        width: 200px;
    }
    
    .education-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const educationCards = document.querySelectorAll('.education-card');
    
    educationCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});
</script>
@endsection
