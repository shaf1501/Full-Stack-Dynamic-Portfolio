@extends('admin.layout')

@section('title', 'Dashboard')

@section('breadcrumb')
    <i class="fas fa-home"></i>
    <span>Dashboard</span>
@endsection

@section('content')
<div class="page-header">
    <h1 class="page-title">Dashboard Overview</h1>
    <p class="page-subtitle">Welcome back! Here's what's happening with your portfolio.</p>
</div>

<!-- Statistics Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon projects">
            <i class="fas fa-code"></i>
        </div>
        <div class="stat-content">
            <h3>{{ $stats['projects'] }}</h3>
            <p>Projects</p>
            <span class="stat-trend positive">
                <i class="fas fa-arrow-up"></i>
                +12% from last month
            </span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon skills">
            <i class="fas fa-tools"></i>
        </div>
        <div class="stat-content">
            <h3>{{ $stats['skills'] }}</h3>
            <p>Skills</p>
            <span class="stat-trend positive">
                <i class="fas fa-arrow-up"></i>
                +5% from last month
            </span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon education">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="stat-content">
            <h3>{{ $stats['educations'] }}</h3>
            <p>Education</p>
            <span class="stat-trend stable">
                <i class="fas fa-minus"></i>
                No change
            </span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon experience">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="stat-content">
            <h3>{{ $stats['experiences'] }}</h3>
            <p>Experience</p>
            <span class="stat-trend positive">
                <i class="fas fa-arrow-up"></i>
                +25% from last month
            </span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon achievements">
            <i class="fas fa-trophy"></i>
        </div>
        <div class="stat-content">
            <h3>{{ $stats['achievements'] }}</h3>
            <p>Achievements</p>
            <span class="stat-trend positive">
                <i class="fas fa-arrow-up"></i>
                +8% from last month
            </span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon visitors">
            <i class="fas fa-eye"></i>
        </div>
        <div class="stat-content">
            <h3>2,847</h3>
            <p>Portfolio Views</p>
            <span class="stat-trend positive">
                <i class="fas fa-arrow-up"></i>
                +18% from last month
            </span>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="quick-actions">
    <h2 class="section-title">Quick Actions</h2>
    <div class="action-cards">
        <a href="{{ route('admin.projects.create') }}" class="action-card">
            <div class="action-icon">
                <i class="fas fa-plus"></i>
            </div>
            <h3>Add New Project</h3>
            <p>Showcase your latest work</p>
        </a>

        <a href="{{ route('admin.skills.create') }}" class="action-card">
            <div class="action-icon">
                <i class="fas fa-plus"></i>
            </div>
            <h3>Add New Skill</h3>
            <p>Update your skill set</p>
        </a>

        <a href="{{ route('admin.experiences.create') }}" class="action-card">
            <div class="action-icon">
                <i class="fas fa-plus"></i>
            </div>
            <h3>Add Experience</h3>
            <p>Document your career journey</p>
        </a>

        <a href="{{ route('admin.personal-details') }}" class="action-card">
            <div class="action-icon">
                <i class="fas fa-edit"></i>
            </div>
            <h3>Update Profile</h3>
            <p>Keep your info current</p>
        </a>
    </div>
</div>

<!-- Recent Content -->
<div class="content-grid">
    <!-- Recent Projects -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-code"></i>
                Recent Projects
            </h3>
            <a href="{{ route('admin.projects') }}" class="btn btn-secondary btn-sm">
                View All
            </a>
        </div>
        <div class="card-body">
            @if($recentProjects->count() > 0)
                <div class="project-list">
                    @foreach($recentProjects as $project)
                        <div class="project-item">
                            <div class="project-info">
                                <h4>{{ $project->title }}</h4>
                                <p>{{ Str::limit($project->description, 80) }}</p>
                                <div class="project-meta">
                                    <span class="project-tech">{{ $project->technologies }}</span>
                                    <span class="project-date">{{ $project->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="project-actions">
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <i class="fas fa-code"></i>
                    <h4>No projects yet</h4>
                    <p>Start by adding your first project</p>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add Project
                    </a>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent Education -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-graduation-cap"></i>
                Education
            </h3>
            <a href="{{ route('admin.educations') }}" class="btn btn-secondary btn-sm">
                View All
            </a>
        </div>
        <div class="card-body">
            @if($recentEducations->count() > 0)
                <div class="education-list">
                    @foreach($recentEducations as $education)
                        <div class="education-item">
                            <div class="education-info">
                                <h4>{{ $education->degree }}</h4>
                                <p>{{ $education->institution }}</p>
                                <div class="education-meta">
                                    <span class="education-field">{{ $education->field_of_study }}</span>
                                    <span class="education-date">
                                        {{ \Carbon\Carbon::parse($education->start_date)->format('Y') }} - 
                                        {{ $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('Y') : 'Present' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>No education records</h4>
                    <p>Add your educational background</p>
                    <a href="{{ route('admin.educations.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add Education
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: var(--white);
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: var(--shadow-sm);
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.stat-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--white);
}

.stat-icon.projects { background: linear-gradient(135deg, #0F828C 0%, #0a6b75 100%); }
.stat-icon.skills { background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); }
.stat-icon.education { background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%); }
.stat-icon.experience { background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%); }
.stat-icon.achievements { background: linear-gradient(135deg, #10B981 0%, #059669 100%); }
.stat-icon.visitors { background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%); }

.stat-content h3 {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.25rem;
}

.stat-content p {
    color: var(--gray-medium);
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.stat-trend {
    font-size: 0.875rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.stat-trend.positive { color: #16a34a; }
.stat-trend.negative { color: #dc2626; }
.stat-trend.stable { color: var(--gray-medium); }

.quick-actions {
    margin-bottom: 2rem;
}

.section-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 1.5rem;
}

.action-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.action-card {
    background: var(--white);
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: var(--shadow-sm);
    text-decoration: none;
    color: inherit;
    transition: all 0.3s ease;
    text-align: center;
}

.action-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.action-icon {
    width: 50px;
    height: 50px;
    background: var(--gradient);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: var(--white);
    font-size: 1.25rem;
}

.action-card h3 {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.5rem;
}

.action-card p {
    color: var(--gray-medium);
    font-size: 0.875rem;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.project-list, .education-list {
    space: 1rem 0;
}

.project-item, .education-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
    border-bottom: 1px solid #e2e8f0;
}

.project-item:last-child, .education-item:last-child {
    border-bottom: none;
}

.project-info h4, .education-info h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 0.25rem;
}

.project-info p, .education-info p {
    color: var(--gray-medium);
    font-size: 0.875rem;
    margin-bottom: 0.5rem;
}

.project-meta, .education-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.75rem;
}

.project-tech, .education-field {
    background: #f1f5f9;
    color: var(--accent);
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-weight: 500;
}

.project-date, .education-date {
    color: var(--gray-light);
}

.empty-state {
    text-align: center;
    padding: 2rem;
    color: var(--gray-medium);
}

.empty-state i {
    font-size: 3rem;
    margin-bottom: 1rem;
    opacity: 0.5;
}

.empty-state h4 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.empty-state p {
    margin-bottom: 1.5rem;
}

@media (max-width: 768px) {
    .content-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .action-cards {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection