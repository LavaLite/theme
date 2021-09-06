    <div class="profile-status-wrap">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="profile-name-info">
                    <p>Welcome</p>
                    <h2 class="profile-name">{{user()->name}}</h2>
                    <h4 class="designation">{{user()->designation}}</h4>
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="profile-button-wrap">
                    <button type="button" class="btn btn-with-icon btn-secondary mr-15" data-toggle="modal"
                        data-target="#createProjectModal"><i class="las la-file-alt"></i>New Project</button>
                    <button type="button" class="btn btn-with-icon btn-theme"><i class="las la-plus-circle"></i>Add New
                        Task</button>
                </div>
            </div>
        </div>
        <hr class="mt-20">
    </div>
    <div class="row pl-15 pr-15 pb-30">
        <div class="col-md-9">
            <div class="todays-app-wrap">
                <div class="app-sec-title">
                    <h2>Today's Tasks</h2>
                </div>

                <div class="todays-app-wrap-inner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="app-item">
                                <div class="app-title">
                                    <h4>Create a new database for project A</h4>
                                    <span class="app-status-check"></span>
                                </div>
                                <span class="badge badge-status in-progress">In Progress</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="app-item">
                                <div class="app-title">
                                    <h4>Set up &amp; integrate design system</h4>
                                    <span class="app-status-check completed"></span>
                                </div>
                                <span class="badge badge-status completed">Done</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="app-item">
                                <div class="app-title">
                                    <h4>Create app mobile icons till Wed</h4>
                                    <span class="app-status-check completed"></span>
                                </div>
                                <span class="badge badge-status completed">Done</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="app-item">
                                <div class="app-title">
                                    <h4>Share a prototype</h4>
                                    <span class="app-status-check completed"></span>
                                </div>
                                <span class="badge badge-status completed">Done</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-wrap">
                <div class="app-sec-title">
                    <h2>Projects</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-item">
                            <div class="project-title">
                                <h3>Project 1</h3>
                                <span class="badge badge-status in-progress">In Progress</span>
                            </div>
                            <div class="project-progress">
                                <p>Task Completed: <span>7/10</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="project-infos">
                                <p>Client: <span>John</span></p>
                                <p>Deadline: <span>25 June 2020</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-item">
                            <div class="project-title">
                                <h3>Project 2</h3>
                                <span class="badge badge-status in-progress">In Progress</span>
                            </div>
                            <div class="project-progress">
                                <p>Task Completed: <span>7/15</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="project-infos">
                                <p>Client: <span>Doe</span></p>
                                <p>Deadline: <span>12 May 2020</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-item">
                            <div class="project-title">
                                <h3>Project 3</h3>
                                <span class="badge badge-status ready">Ready</span>
                            </div>
                            <div class="project-progress">
                                <p>Task Completed: <span>10/10</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="project-infos">
                                <p>Client: <span>John Doe</span></p>
                                <p>Deadline: <span>20 June 2020</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="app-status-wrap">
                <div class="app-status-item">
                    <div class="app-status-icon"><i class="las la-hourglass"></i></div>
                    <div class="app-status-info">
                        <h3>11 <span>Pending</span></h3>
                    </div>
                    <i class="overlay-icon las la-hourglass"></i>
                </div>
                <div class="app-status-item">
                    <div class="app-status-icon"><i class="las la-sync"></i></div>
                    <div class="app-status-info">
                        <h3>25 <span>In Progress</span></h3>
                    </div>
                    <i class="overlay-icon las la-sync"></i>
                </div>
                <div class="app-status-item">
                    <div class="app-status-icon"><i class="las la-pause"></i></div>
                    <div class="app-status-info">
                        <h3>2 <span>Stuck</span></h3>
                    </div>
                    <i class="overlay-icon las la-pause"></i>
                </div>
            </div>
            <div class="app-sec-title">
                <h2>Task Performance</h2>
            </div>
            <div class="card">
                <div class="card-body">

                </div>
            </div>

        </div>
    </div>
