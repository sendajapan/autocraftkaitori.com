<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<!-- hero section start  -->
<section class="top_banner-process position-relative overflow-hidden">
    <div class="container text-center">
        <div class="row">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                <h2 class="page-title display-3">Purchase Process</h2>
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?=base_url()?>">Home</a>
                    <span class="breadcrumb-item active" aria-current="page">Purchase Process</span>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="purchase-process-wrap py-5">
    <div class="container process-container">
        <h2 class="process-main-title">Purchase Process</h2>
        
        <!-- Row 1: Steps 01-02 -->
        <div class="process-row row-1">
            <div class="process-card">
                <div class="step-badge">01</div>
                <h3 class="step-title">Apply for an appraisal</h3>
                <p class="step-desc">Please contact your sales representative or the Truck Division. You can contact us by email, phone, or fax, whichever method is most convenient for you.</p>
            </div>
            <div class="connector-line"></div>
            <div class="process-card">
                <div class="step-badge">02</div>
                <h3 class="step-title">On-site assessment</h3>
                <p class="step-desc">A local representative will visit you and assess your vehicle.<br>Of course, it's free, so please feel free to contact us.</p>
            </div>
        </div>

        <!-- Row 2: Steps 03-04 -->
        <div class="process-row row-2">
            <div class="process-card">
                <div class="step-badge">03</div>
                <h3 class="step-title">Proposal of amount</h3>
                <p class="step-desc">A specialized department within Enefree will calculate and present a purchase price based on domestic and international demand.</p>
            </div>
            <div class="connector-line"></div>
            <div class="process-card">
                <div class="step-badge">04</div>
                <h3 class="step-title">Contract</h3>
                <p class="step-desc">If you are satisfied with the purchase price, Enefree will issue you a contract and proceed with the contract.</p>
            </div>
        </div>

        <!-- Row 3: Steps 05-06 -->
        <div class="process-row row-3">
            <div class="process-card">
                <div class="step-badge">05</div>
                <h3 class="step-title">Pick up and payment</h3>
                <p class="step-desc">After the vehicle is picked up by the transport company designated by Enefree, payment will be made to your designated account.</p>
            </div>
            <div class="connector-line"></div>
            <div class="process-card">
                <div class="step-badge">06</div>
                <h3 class="step-title">Logo & Sign removal</h3>
                <p class="step-desc">We will provide you with photos after removing all company names and logos from the vehicle and repainting it.</p>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>
