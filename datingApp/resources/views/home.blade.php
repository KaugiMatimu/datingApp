@extends('layouts.app')

@section('content')
<div class="dating-home">
    @if($user->info->profile_picture == null)
        <div class="welcome-message">
            <div class="welcome-content">
                <h1>Welcome to Your Dating Journey!</h1>
                <p class="lead">Complete your profile to start discovering amazing matches</p>
                <div class="profile-completion">
                    <div class="completion-step active">
                        <span>1</span>
                        <p>Add Profile Photo</p>
                    </div>
                    <div class="completion-step">
                        <span>2</span>
                        <p>Set Preferences</p>
                    </div>
                    <div class="completion-step">
                        <span>3</span>
                        <p>Start Matching</p>
                    </div>
                </div>
                <a href="" class="btn btn-primary btn-lg">Complete Your Profile</a>
            </div>
        </div>
    @elseif($pictures == null)
        <div class="no-matches">
            <div class="no-matches-content">
                <h2>Ready to Find Your Match?</h2>
                <p>We couldn't find any matches yet. Try adjusting your preferences or check back later.</p>
                <div class="action-buttons">
                    <a href="{{ route('settings') }}" class="btn btn-outline-primary">Adjust Settings</a>
                    <button class="btn btn-primary refresh-btn">
                        <i class="fas fa-sync-alt"></i> Refresh Matches
                    </button>
                </div>
            </div>
        </div>
    @else
        <div class="match-card">
            <!-- Photo Gallery -->
            <div class="match-photos">
                @if(count($pictures) == 0)
                    <div class="main-photo">
                        <img src="{{ $otherUser->info->getPicture() }}" alt="{{ $otherUser->info->name }}">
                    </div>
                @else
                    <div class="photo-gallery">
                        <div class="main-photo">
                            <img src="{{ $otherUser->info->getPicture() }}" alt="{{ $otherUser->info->name }}">
                        </div>
                        <div class="photo-thumbnails">
                            @foreach($pictures as $picture)
                                <div class="thumbnail">
                                    <img src="{{ $picture->getPicture() }}" alt="User photo">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Profile Info -->
            <div class="match-info">
                <div class="match-header">
                    <h1>{{ $otherUser->info->name }} {{ $otherUser->info->surname }}, <span>{{ $otherUser->info->age }}</span></h1>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i> {{ $otherUser->info->country }}
                    </div>
                </div>

                <div class="match-details">
                    <div class="detail">
                        <i class="fas fa-language"></i>
                        <span>{{ $otherUser->info->languages }}</span>
                    </div>
                    <div class="detail">
                        <i class="fas fa-heart"></i>
                        <span>{{ $otherUser->info->relationship }}</span>
                    </div>
                </div>

                <div class="match-bio">
                    <h3>About Me</h3>
                    <p>{{ $otherUser->info->description }}</p>
                </div>

                <div class="match-actions">
                    <form action="{{ route('dislike', $otherUser->id) }}" method="post">
                        @csrf
                        <button type="submit" class="action-btn dislike-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </form>
                    <form action="{{ route('like', $otherUser->id) }}" method="post">
                        @csrf
                        <button type="submit" class="action-btn like-btn">
                            <i class="fas fa-heart"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection

<style>
    /* Base Styles */
    .dating-home {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        min-height: calc(100vh - 120px);
        display: flex;
        flex-direction: column;
    }

    /* Welcome Message (No Profile Photo) */
    .welcome-message {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        color: white;
        padding: 50px;
        text-align: center;
        margin: auto;
        width: 100%;
        max-width: 800px;
    }

    .welcome-content h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .welcome-content .lead {
        font-size: 1.3rem;
        margin-bottom: 40px;
        opacity: 0.9;
    }

    .profile-completion {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin: 40px 0;
    }

    .completion-step {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .completion-step span {
        width: 50px;
        height: 50px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .completion-step.active span {
        background: white;
        color: #764ba2;
        font-weight: bold;
    }

    .completion-step p {
        font-size: 0.9rem;
        opacity: 0.8;
    }

    .btn-primary {
        background: white;
        color: #764ba2;
        border: none;
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    /* No Matches State */
    .no-matches {
        background: white;
        border-radius: 15px;
        padding: 50px;
        text-align: center;
        margin: auto;
        width: 100%;
        max-width: 600px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    .no-matches h2 {
        color: #333;
        margin-bottom: 15px;
    }

    .no-matches p {
        color: #666;
        margin-bottom: 30px;
        font-size: 1.1rem;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .btn-outline-primary {
        border: 2px solid #667eea;
        color: #667eea;
        background: transparent;
    }

    .refresh-btn {
        background: #667eea;
        color: white;
    }

    /* Match Card */
    .match-card {
        display: flex;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        margin: auto;
        width: 100%;
    }

    .match-photos {
        flex: 1;
        background: #f8f9fa;
        padding: 30px;
        display: flex;
        flex-direction: column;
    }

    .main-photo {
        flex: 1;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .main-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .photo-thumbnails {
        display: flex;
        gap: 10px;
        padding: 20px 0;
        overflow-x: auto;
    }

    .thumbnail {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        overflow: hidden;
        flex-shrink: 0;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.2s;
    }

    .thumbnail:hover {
        border-color: #667eea;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .match-info {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
    }

    .match-header h1 {
        font-size: 2.2rem;
        color: #333;
        margin-bottom: 5px;
    }

    .match-header h1 span {
        font-weight: normal;
        color: #666;
    }

    .location {
        color: #667eea;
        font-size: 1.1rem;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .match-details {
        display: flex;
        gap: 30px;
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #eee;
    }

    .detail {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #555;
    }

    .detail i {
        color: #667eea;
        font-size: 1.2rem;
    }

    .match-bio {
        flex: 1;
    }

    .match-bio h3 {
        color: #333;
        margin-bottom: 15px;
    }

    .match-bio p {
        color: #555;
        line-height: 1.6;
        font-size: 1.1rem;
    }

    .match-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .action-btn {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .like-btn {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        box-shadow: 0 5px 15px rgba(79, 172, 254, 0.3);
    }

    .dislike-btn {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        box-shadow: 0 5px 15px rgba(240, 147, 251, 0.3);
    }

    .action-btn:hover {
        transform: scale(1.1);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .match-card {
            flex-direction: column;
        }
        
        .match-photos {
            min-height: 400px;
        }
    }

    @media (max-width: 768px) {
        .welcome-message {
            padding: 30px 20px;
        }
        
        .profile-completion {
            gap: 15px;
        }
        
        .match-details {
            flex-direction: column;
            gap: 15px;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
    }
</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">