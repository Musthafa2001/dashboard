<!DOCTYPE html>
<html lang="en">

<!-- TODO: change the header -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Feed Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #fafafa; /* Classic light gray background */
            padding-top: 70px; /* Space for fixed navbar */
        }

        /* Post Card Styling */
        .post-card {
            border-radius: 8px;
            border: 1px solid #dbdbdb;
            background: #fff;
            margin-bottom: 25px;
        }

        .post-header {
            padding: 14px 16px;
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 12px;
        }

        .post-image {
            width: 100%;
            max-height: 600px;
            object-fit: cover;
        }

        .action-bar {
            padding: 12px 16px 8px;
        }

        .action-icon {
            font-size: 1.5rem;
            cursor: pointer;
            margin-right: 16px;
            transition: transform 0.2s;
        }

        .action-icon:hover {
            opacity: 0.6;
        }

        .action-icon:active {
            transform: scale(0.9);
        }

        /* Like Button Active State */
        .liked {
            color: #ff3040;
        }

        .upload-zone {
            border: 2px dashed #dbdbdb;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            background: #fafafa;
        }
        
        .upload-zone:hover {
            background: #f0f0f0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
        <div class="container d-flex justify-content-between align-items-center" style="max-width: 975px;">
            <a class="navbar-brand fw-bold fs-4" href="#">Photogram</a>
            
            <div class="d-none d-md-block w-25">
                <input type="text" class="form-control bg-light" placeholder="Search">
            </div>

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-primary btn-sm fw-bold px-3" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="bi bi-plus-square me-1"></i> Upload
                </button>
                <i class="bi bi-house-door-fill fs-4 cursor-pointer"></i>
                <i class="bi bi-compass fs-4 cursor-pointer"></i>
                <img src="https://ui-avatars.com/api/?name=User&background=random" class="avatar m-0" alt="Profile">
            </div>
        </div>
    </nav>

    <div class="container" style="max-width: 600px;">
        
        <div class="card post-card shadow-sm">
            <div class="post-header">
                <img src="https://ui-avatars.com/api/?name=Design+Crafter&background=0D8ABC&color=fff" class="avatar" alt="Avatar">
                <div class="d-flex flex-column">
                    <span class="fw-bold" style="font-size: 14px;">design_crafter</span>
                    <span class="text-muted" style="font-size: 12px;">Kitchen Renovation</span>
                </div>
                <i class="bi bi-three-dots ms-auto cursor-pointer"></i>
            </div>

            <img src="https://images.unsplash.com/photo-1523413363574-c30aa1c2a516?auto=format&fit=crop&w=800&q=80" class="post-image" alt="Post content">

            <div class="action-bar d-flex justify-content-between">
                <div>
                    <i class="bi bi-heart action-icon like-btn"></i>
                    <i class="bi bi-chat action-icon"></i>
                    <i class="bi bi-send action-icon"></i>
                </div>
                <div>
                    <i class="bi bi-bookmark action-icon save-btn"></i>
                </div>
            </div>

            <div class="px-3 pb-3">
                <p class="fw-bold mb-1" style="font-size: 14px;"><span class="like-count">1,024</span> likes</p>
                <p class="mb-1" style="font-size: 14px;">
                    <span class="fw-bold">design_crafter</span> Wrapping up the installation! Decided to make this design horizontal. It sits perfectly flush against the wall surface—definitely the right call keeping this specific texture off the floor to maintain the room's visual flow. 🛠️✨
                </p>
                <p class="text-muted mb-1 cursor-pointer" style="font-size: 14px;">View all 48 comments</p>
                <p class="text-muted text-uppercase" style="font-size: 10px;">2 HOURS AGO</p>
            </div>
            
            <div class="card-footer bg-white border-top-0 d-flex align-items-center py-3">
                <i class="bi bi-emoji-smile fs-5 me-2 text-muted"></i>
                <input type="text" class="form-control border-0 shadow-none p-0" placeholder="Add a comment...">
                <button class="btn btn-link text-primary fw-bold text-decoration-none p-0 ms-2">Post</button>
            </div>
        </div>

    </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title fw-bold mx-auto w-100 text-center">Create new post</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="upload-zone mb-3 d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-images display-1 text-muted mb-2"></i>
                        <p class="fs-5 mb-3">Drag photos and videos here</p>
                        <button class="btn btn-primary btn-sm fw-bold">Select from computer</button>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Write a caption..." id="captionArea" style="height: 100px"></textarea>
                        <label for="captionArea">Write a caption...</label>
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-primary w-100 fw-bold py-2 rounded-3">Share</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Interactive Like Button Logic
        document.querySelectorAll('.like-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.classList.toggle('bi-heart');
                this.classList.toggle('bi-heart-fill');
                this.classList.toggle('liked');
                
                // Simulate updating the like count
                let countElement = this.closest('.post-card').querySelector('.like-count');
                let currentLikes = parseInt(countElement.innerText.replace(/,/g, ''));
                if (this.classList.contains('liked')) {
                    countElement.innerText = (currentLikes + 1).toLocaleString();
                } else {
                    countElement.innerText = (currentLikes - 1).toLocaleString();
                }
            });
        });

        // Interactive Bookmark Button Logic
        document.querySelectorAll('.save-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.classList.toggle('bi-bookmark');
                this.classList.toggle('bi-bookmark-fill');
            });
        });
    </script>
</body>
</html>