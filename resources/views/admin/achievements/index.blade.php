@extends('admin.layout')

@section('title', 'Achievement Management')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <span>Achievements</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Achievement Management</h1>
        <p class="page-subtitle">Showcase your awards, certifications, and professional accomplishments</p>
    </div>
    <div>
        <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Add New Achievement
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-trophy"></i>
            All Achievements ({{ $achievements->total() }})
        </h3>
        <div class="card-actions">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search achievements..." id="searchInput">
            </div>
            <div class="filter-dropdown">
                <select id="categoryFilter" class="form-control">
                    <option value="">All Categories</option>
                    <option value="award">Awards</option>
                    <option value="certification">Certifications</option>
                    <option value="recognition">Recognition</option>
                    <option value="competition">Competitions</option>
                    <option value="publication">Publications</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($achievements->count() > 0)
            <div class="achievements-grid">
                @foreach($achievements as $achievement)
                    <div class="achievement-card" data-category="{{ $achievement->category }}">
                        <div class="achievement-header">
                            <div class="achievement-icon">
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
                            <div class="achievement-category">
                                <span class="badge badge-{{ $achievement->category }}">
                                    {{ ucfirst($achievement->category) }}
                                </span>
                            </div>
                            <div class="achievement-actions">
                                <a href="{{ route('admin.achievements.edit', $achievement->id) }}" class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.achievements.destroy', $achievement->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this achievement?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="achievement-content">
                            <h4 class="achievement-title">{{ $achievement->title }}</h4>
                            @if($achievement->organization)
                                <h5 class="achievement-organization">{{ $achievement->organization }}</h5>
                            @endif
                            
                            <div class="achievement-details">
                                @if($achievement->date_received)
                                    <div class="achievement-date">
                                        <i class="fas fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($achievement->date_received)->format('M Y') }}
                                    </div>
                                @endif
                                
                                @if($achievement->location)
                                    <div class="achievement-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $achievement->location }}
                                    </div>
                                @endif
                            </div>
                            
                            @if($achievement->description)
                                <div class="achievement-description">
                                    <p>{{ Str::limit($achievement->description, 120) }}</p>
                                    @if(strlen($achievement->description) > 120)
                                        <button class="btn btn-link btn-sm expand-description" data-full-text="{{ $achievement->description }}">
                                            Read More
                                        </button>
                                    @endif
                                </div>
                            @endif
                            
                            @if($achievement->certificate_url || $achievement->credential_id)
                                <div class="achievement-credentials">
                                    @if($achievement->certificate_url)
                                        <a href="{{ $achievement->certificate_url }}" target="_blank" class="credential-link">
                                            <i class="fas fa-external-link-alt"></i>
                                            View Certificate
                                        </a>
                                    @endif
                                    @if($achievement->credential_id)
                                        <span class="credential-id">
                                            <i class="fas fa-id-card"></i>
                                            ID: {{ $achievement->credential_id }}
                                        </span>
                                    @endif
                                </div>
                            @endif
                            
                            @if($achievement->skills)
                                <div class="achievement-skills">
                                    @foreach(explode(',', $achievement->skills) as $skill)
                                        <span class="skill-tag">{{ trim($skill) }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $achievements->links() }}
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-trophy"></i>
                <h4>No achievements found</h4>
                <p>Start showcasing your accomplishments by adding your first achievement</p>
                <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Your First Achievement
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

.filter-dropdown select {
    padding: 0.5rem 0.75rem;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 0.875rem;
    width: 180px;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 2rem;
}

.achievement-card {
    background: var(--white);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
    position: relative;
}

.achievement-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.achievement-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.achievement-icon {
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

.achievement-category {
    position: absolute;
    top: 1rem;
    right: 4rem;
}

.achievement-actions {
    display: flex;
    gap: 0.5rem;
    flex-shrink: 0;
}

.achievement-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.achievement-organization {
    font-size: 1rem;
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 1rem;
}

.achievement-details {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1rem;
}

.achievement-date, .achievement-location {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    color: var(--gray-dark);
}

.achievement-date i, .achievement-location i {
    color: var(--accent);
}

.achievement-description {
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

.achievement-credentials {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e2e8f0;
}

.credential-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--accent);
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 500;
}

.credential-link:hover {
    text-decoration: underline;
}

.credential-id {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--gray-medium);
    font-size: 0.875rem;
}

.achievement-skills {
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
    
    .card-actions {
        flex-direction: column;
        align-items: stretch;
        gap: 0.5rem;
    }
    
    .search-box input, .filter-dropdown select {
        width: 100%;
    }
    
    .achievements-grid {
        grid-template-columns: 1fr;
    }
    
    .achievement-header {
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .achievement-category {
        position: static;
        order: 1;
    }
    
    .achievement-actions {
        order: 2;
    }
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    filterAchievements();
});

// Category filter
document.getElementById('categoryFilter').addEventListener('change', function(e) {
    filterAchievements();
});

function filterAchievements() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const categoryFilter = document.getElementById('categoryFilter').value;
    const achievementCards = document.querySelectorAll('.achievement-card');
    
    achievementCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        const category = card.dataset.category;
        
        const matchesSearch = text.includes(searchTerm);
        const matchesCategory = !categoryFilter || category === categoryFilter;
        
        card.style.display = (matchesSearch && matchesCategory) ? '' : 'none';
    });
}

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
            paragraph.textContent = fullText.substring(0, 120) + '...';
            this.textContent = 'Read More';
        }
    });
});
</script>
@endsection
