@extends('admin.layout')

@section('title', 'Skills Management')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <span>Skills</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Skills Management</h1>
        <p class="page-subtitle">Manage your technical and professional skills</p>
    </div>
    <div>
        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Add New Skill
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-tools"></i>
            All Skills ({{ $skills->total() }})
        </h3>
        <div class="card-actions">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search skills..." id="searchInput">
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($skills->count() > 0)
            <div class="skills-grid">
                @foreach($skills as $skill)
                    <div class="skill-card">
                        <div class="skill-header">
                            <div class="skill-info">
                                @if($skill->icon)
                                    <div class="skill-icon">
                                        <i class="{{ $skill->icon }}"></i>
                                    </div>
                                @else
                                    <div class="skill-icon default">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                @endif
                                <div>
                                    <h4 class="skill-name">{{ $skill->name }}</h4>
                                    <span class="skill-category">{{ $skill->category }}</span>
                                </div>
                            </div>
                            <div class="skill-actions">
                                <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.skills.destroy', $skill->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this skill?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: {{ $skill->level }}%"></div>
                            </div>
                            <span class="progress-text">{{ $skill->level }}%</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $skills->links() }}
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-tools"></i>
                <h4>No skills found</h4>
                <p>Start building your skill portfolio by adding your first skill</p>
                <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Your First Skill
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

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 1.5rem;
}

.skill-card {
    background: var(--white);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.skill-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.skill-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.skill-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.skill-icon {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--white);
    background: var(--gradient);
}

.skill-icon.default {
    background: var(--gray-medium);
}

.skill-name {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.25rem;
}

.skill-category {
    font-size: 0.875rem;
    color: var(--gray-medium);
    background: #f1f5f9;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-weight: 500;
}

.skill-actions {
    display: flex;
    gap: 0.5rem;
}

.skill-progress {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.progress-bar {
    flex: 1;
    height: 8px;
    background: #e2e8f0;
    border-radius: 4px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    background: var(--gradient);
    border-radius: 4px;
    transition: width 0.6s ease;
}

.progress-text {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--accent);
    min-width: 40px;
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
    
    .skills-grid {
        grid-template-columns: 1fr;
    }
    
    .skill-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .skill-actions {
        align-self: flex-end;
    }
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const skillCards = document.querySelectorAll('.skill-card');
    
    skillCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Progress bar animation on load
document.addEventListener('DOMContentLoaded', function() {
    const progressBars = document.querySelectorAll('.progress-fill');
    
    progressBars.forEach((bar, index) => {
        const width = bar.style.width;
        bar.style.width = '0%';
        
        setTimeout(() => {
            bar.style.width = width;
        }, 100 + (index * 50));
    });
});
</script>
@endsection
