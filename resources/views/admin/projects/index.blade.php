@extends('admin.layout')

@section('title', 'Projects Management')

@section('breadcrumb')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <i class="fas fa-chevron-right"></i>
    <span>Projects</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Projects Management</h1>
        <p class="page-subtitle">Manage your portfolio projects</p>
    </div>
    <div>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Add New Project
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-code"></i>
            All Projects ({{ $projects->total() }})
        </h3>
        <div class="card-actions">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search projects..." id="searchInput">
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($projects->count() > 0)
            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Technologies</th>
                            <th>Status</th>
                            <th>Links</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>
                                    <div class="project-cell">
                                        @if($project->image)
                                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="project-thumb">
                                        @else
                                            <div class="project-thumb placeholder">
                                                <i class="fas fa-code"></i>
                                            </div>
                                        @endif
                                        <div class="project-info">
                                            <h4>{{ $project->title }}</h4>
                                            <p>{{ Str::limit($project->description, 80) }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="tech-tags">
                                        @foreach(explode(',', $project->technologies) as $tech)
                                            <span class="tech-tag">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <span class="status-badge {{ $project->status }}">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="project-links">
                                        @if($project->github_link)
                                            <a href="{{ $project->github_link }}" target="_blank" class="link-btn" title="GitHub">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                        @if($project->live_link)
                                            <a href="{{ $project->live_link }}" target="_blank" class="link-btn" title="Live Demo">
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="date-cell">
                                        <span class="date">{{ $project->created_at->format('M d, Y') }}</span>
                                        <span class="time">{{ $project->created_at->format('H:i') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-secondary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.projects.destroy', $project->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this project?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $projects->links() }}
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-code"></i>
                <h4>No projects found</h4>
                <p>Start building your portfolio by adding your first project</p>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Your First Project
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

.table-responsive {
    overflow-x: auto;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background: #f8fafc;
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    color: var(--gray-dark);
    border-bottom: 1px solid #e2e8f0;
}

.data-table td {
    padding: 1rem;
    border-bottom: 1px solid #e2e8f0;
}

.project-cell {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.project-thumb {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    object-fit: cover;
}

.project-thumb.placeholder {
    background: var(--light-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gray-medium);
}

.project-info h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.25rem;
}

.project-info p {
    font-size: 0.875rem;
    color: var(--gray-medium);
    margin: 0;
}

.tech-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tech-tag {
    background: #f1f5f9;
    color: var(--accent);
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
    text-transform: uppercase;
}

.status-badge.active {
    background: #dcfce7;
    color: #166534;
}

.status-badge.inactive {
    background: #fef2f2;
    color: #991b1b;
}

.project-links {
    display: flex;
    gap: 0.5rem;
}

.link-btn {
    width: 32px;
    height: 32px;
    border-radius: 6px;
    background: var(--light-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gray-medium);
    text-decoration: none;
    transition: all 0.3s ease;
}

.link-btn:hover {
    background: var(--accent);
    color: var(--white);
}

.date-cell {
    display: flex;
    flex-direction: column;
}

.date-cell .date {
    font-weight: 500;
    color: var(--primary);
}

.date-cell .time {
    font-size: 0.75rem;
    color: var(--gray-medium);
}

.action-buttons {
    display: flex;
    gap: 0.5rem;
}

.pagination-wrapper {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
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
    
    .project-cell {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }
    
    .tech-tags {
        flex-direction: column;
    }
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('.data-table tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});
</script>
@endsection
