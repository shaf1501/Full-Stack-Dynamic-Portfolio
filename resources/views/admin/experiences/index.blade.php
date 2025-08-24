@extends('admin.layout')

@section('title', 'Experience Management')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <span>Experience</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Experience Management</h1>
        <p class="page-subtitle">Manage your professional work experience and career history</p>
    </div>
    <div>
        <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Add New Experience
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-briefcase"></i>
            All Experience Records ({{ $experiences->total() }})
        </h3>
        <div class="card-actions">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search experiences..." id="searchInput">
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($experiences->count() > 0)
            <div class="experience-timeline">
                @foreach($experiences as $experience)
                    <div class="timeline-item">
                        <div class="timeline-marker">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="experience-card">
                                <div class="experience-header">
                                    <div class="experience-main">
                                        <h4 class="experience-position">{{ $experience->position }}</h4>
                                        <h5 class="experience-company">{{ $experience->company_name }}</h5>
                                        @if($experience->location)
                                            <p class="experience-location">
                                                <i class="fas fa-map-marker-alt"></i>
                                                {{ $experience->location }}
                                            </p>
                                        @endif
                                    </div>
                                    <div class="experience-actions">
                                        <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="btn btn-sm btn-secondary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.experiences.destroy', $experience->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="experience-details">
                                    <div class="experience-period">
                                        <i class="fas fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} - 
                                        {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('M Y') : 'Present' }}
                                        <span class="experience-duration">
                                            @php
                                                $start = \Carbon\Carbon::parse($experience->start_date);
                                                $end = $experience->end_date ? \Carbon\Carbon::parse($experience->end_date) : \Carbon\Carbon::now();
                                                $duration = $start->diff($end);
                                                $years = $duration->y;
                                                $months = $duration->m;
                                                
                                                if ($years > 0 && $months > 0) {
                                                    echo "({$years} year" . ($years > 1 ? 's' : '') . ", {$months} month" . ($months > 1 ? 's' : '') . ")";
                                                } elseif ($years > 0) {
                                                    echo "({$years} year" . ($years > 1 ? 's' : '') . ")";
                                                } elseif ($months > 0) {
                                                    echo "({$months} month" . ($months > 1 ? 's' : '') . ")";
                                                } else {
                                                    echo "(Less than a month)";
                                                }
                                            @endphp
                                        </span>
                                    </div>
                                    
                                    @if($experience->employment_type)
                                        <div class="experience-type">
                                            <span class="badge badge-{{ $experience->employment_type == 'full-time' ? 'success' : ($experience->employment_type == 'part-time' ? 'warning' : 'info') }}">
                                                {{ ucwords(str_replace('-', ' ', $experience->employment_type)) }}
                                            </span>
                                        </div>
                                    @endif
                                    
                                    @if($experience->description)
                                        <div class="experience-description">
                                            <p>{{ Str::limit($experience->description, 200) }}</p>
                                            @if(strlen($experience->description) > 200)
                                                <button class="btn btn-link btn-sm expand-description" data-full-text="{{ $experience->description }}">
                                                    Read More
                                                </button>
                                            @endif
                                        </div>
                                    @endif
                                    
                                    @if($experience->technologies)
                                        <div class="experience-technologies">
                                            <strong>Technologies:</strong>
                                            @foreach(explode(',', $experience->technologies) as $tech)
                                                <span class="tech-tag">{{ trim($tech) }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $experiences->links() }}
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-briefcase"></i>
                <h4>No experience records found</h4>
                <p>Start building your professional history by adding your first work experience</p>
                <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Your First Experience
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

.experience-timeline {
    position: relative;
    padding-left: 2rem;
}

.experience-timeline::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--gradient);
}

.timeline-item {
    position: relative;
    margin-bottom: 2rem;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    position: absolute;
    left: -2rem;
    top: 0.75rem;
    width: 40px;
    height: 40px;
    background: var(--gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 1rem;
    border: 4px solid var(--white);
    box-shadow: var(--shadow-sm);
}

.timeline-content {
    margin-left: 1rem;
}

.experience-card {
    background: var(--white);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.experience-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.experience-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.experience-position {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.25rem;
}

.experience-company {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 0.5rem;
}

.experience-location {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--gray-medium);
    font-size: 0.875rem;
    margin: 0;
}

.experience-location i {
    color: var(--accent);
}

.experience-actions {
    display: flex;
    gap: 0.5rem;
    flex-shrink: 0;
}

.experience-period {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    color: var(--gray-dark);
    margin-bottom: 0.75rem;
}

.experience-period i {
    color: var(--accent);
}

.experience-duration {
    color: var(--gray-medium);
    font-style: italic;
    margin-left: 0.5rem;
}

.experience-type {
    margin-bottom: 1rem;
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

.experience-description {
    margin-bottom: 1rem;
    line-height: 1.6;
    color: var(--gray-dark);
}

.expand-description {
    padding: 0;
    font-size: 0.875rem;
    color: var(--accent);
    text-decoration: none;
}

.expand-description:hover {
    text-decoration: underline;
}

.experience-technologies {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    flex-wrap: wrap;
    font-size: 0.875rem;
    color: var(--gray-dark);
}

.tech-tag {
    background: var(--gray-light);
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
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
    
    .experience-timeline {
        padding-left: 1rem;
    }
    
    .experience-timeline::before {
        left: 10px;
    }
    
    .timeline-marker {
        left: -1.25rem;
        width: 30px;
        height: 30px;
        font-size: 0.875rem;
    }
    
    .timeline-content {
        margin-left: 0.5rem;
    }
    
    .experience-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .experience-actions {
        align-self: flex-end;
    }
    
    .experience-technologies {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    timelineItems.forEach(item => {
        const text = item.textContent.toLowerCase();
        item.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Expand description functionality
document.querySelectorAll('.expand-description').forEach(button => {
    button.addEventListener('click', function() {
        const descriptionDiv = this.parentElement;
        const paragraph = descriptionDiv.querySelector('p');
        const fullText = this.dataset.fullText;
        
        if (this.textContent === 'Read More') {
            paragraph.textContent = fullText;
            this.textContent = 'Read Less';
        } else {
            paragraph.textContent = fullText.substring(0, 200) + '...';
            this.textContent = 'Read More';
        }
    });
});
</script>
@endsection
