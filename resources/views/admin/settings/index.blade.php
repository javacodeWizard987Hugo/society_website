@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <!-- Hero Section Settings -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header"><i class="fas fa-rocket me-2"></i>Home Hero Section</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="hero_badge" class="form-label">Hero Badge Text</label>
                        <input type="text" name="hero_badge" id="hero_badge" class="form-control" value="{{ $settings['hero_badge'] ?? 'Serving Our Community' }}">
                    </div>
                    <div class="mb-3">
                        <label for="hero_title" class="form-label">Hero Title (HTML supported)</label>
                        <textarea name="hero_title" id="hero_title" rows="2" class="form-control">{{ $settings['hero_title'] ?? 'Building a Stronger<br><em>Summerfield</em> Together' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="hero_desc" class="form-label">Hero Description</label>
                        <textarea name="hero_desc" id="hero_desc" rows="3" class="form-control">{{ $settings['hero_desc'] ?? '' }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Stat: Residents (Text)</label>
                            <input type="text" name="stat_residents" class="form-control" value="{{ $settings['stat_residents'] ?? '1,200+' }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Stat: Events (Text)</label>
                            <input type="text" name="stat_events" class="form-control" value="{{ $settings['stat_events'] ?? '48' }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Stat: Years (Text)</label>
                            <input type="text" name="stat_years" class="form-control" value="{{ $settings['stat_years'] ?? '15 yrs' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stat: Residents (Number for counter)</label>
                            <input type="number" name="stat_residents_num" class="form-control" value="{{ $settings['stat_residents_num'] ?? '1200' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stat: Events (Number for counter)</label>
                            <input type="number" name="stat_events_num" class="form-control" value="{{ $settings['stat_events_num'] ?? '48' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header"><i class="fas fa-eye me-2"></i>Vision & Mission</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="vision" class="form-label">Vision</label>
                        <textarea name="vision" id="vision" rows="3" class="form-control">{{ $settings['vision'] ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="mission" class="form-label">Mission</label>
                        <textarea name="mission" id="mission" rows="3" class="form-control">{{ $settings['mission'] ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="founded_year" class="form-label">Founded Year</label>
                        <input type="text" name="founded_year" id="founded_year" class="form-control" value="{{ $settings['founded_year'] ?? '2009' }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- Home About Section -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header"><i class="fas fa-info-circle me-2"></i>Home About Section</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="about_title" class="form-label">About Section Title</label>
                        <textarea name="about_title" id="about_title" rows="2" class="form-control">{{ $settings['about_title'] ?? 'Building a Stronger<br><em>Community</em> Together' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="about_desc" class="form-label">About Description</label>
                        <textarea name="about_desc" id="about_desc" rows="3" class="form-control">{{ $settings['about_desc'] ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="our_work_summary" class="form-label">Our Work Summary (Homepage & About page)</label>
                        <textarea name="our_work_summary" id="our_work_summary" rows="4" class="form-control">{{ $settings['our_work_summary'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Settings -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header"><i class="fas fa-address-book me-2"></i>Contact Information</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="contact_address" class="form-label">Address</label>
                        <input type="text" name="contact_address" id="contact_address" class="form-control" value="{{ $settings['contact_address'] ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="contact_phone" class="form-label">Phone</label>
                        <input type="text" name="contact_phone" id="contact_phone" class="form-control" value="{{ $settings['contact_phone'] ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Email</label>
                        <input type="email" name="contact_email" id="contact_email" class="form-control" value="{{ $settings['contact_email'] ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="contact_map_link" class="form-label">Google Maps Iframe URL</label>
                        <input type="text" name="contact_map_link" id="contact_map_link" class="form-control" value="{{ $settings['contact_map_link'] ?? '' }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- Site Images -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header"><i class="fas fa-images me-2"></i>Section Backgrounds & Images</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">About Main Image</label>
                            @if(!empty($settings['about_image_main']))
                                <div class="mb-2"><img src="{{ asset('storage/' . $settings['about_image_main']) }}" class="img-thumbnail" style="height: 100px;"></div>
                            @endif
                            <input type="file" name="about_image_main" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">About Float Image</label>
                            @if(!empty($settings['about_image_float']))
                                <div class="mb-2"><img src="{{ asset('storage/' . $settings['about_image_float']) }}" class="img-thumbnail" style="height: 100px;"></div>
                            @endif
                            <input type="file" name="about_image_float" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Pages Breadcrumb Background</label>
                            @if(!empty($settings['breadcrumb_bg']))
                                <div class="mb-2"><img src="{{ asset('storage/' . $settings['breadcrumb_bg']) }}" class="img-thumbnail" style="height: 100px;"></div>
                            @endif
                            <input type="file" name="breadcrumb_bg" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body text-end">
            <button type="submit" class="btn btn-primary btn-lg px-5">Save All Settings</button>
        </div>
    </div>
</form>
@endsection
