<div class="contact-card">
    <div class="top-row">
        <div class="line"></div>
        <div class="title">Say Hi!</div>
        <div class="line"></div>
    </div>
    <div class="content">
        <div class="subtitle">
            Find out more about me
        </div>
        <div class="mt-5 d-flex flex-row align-items-center" style="gap: 25px;">
            <object type="image/svg+xml" class="icon me-2" data="<?php echo get_bloginfo('template_url') ?>/icons/github-light.svg" width="48" height="48" alt="SVG Icon of Github"></object>
            <a class="link-light" rel="noopener" href="https://github.com/junyongxlee" target="_blank">github.com/junyongxlee</a>
        </div>
        <div class="mt-4 d-flex flex-row align-items-center" style="gap: 25px;">
            <object type="image/svg+xml" class="icon me-2" data="<?php echo get_bloginfo('template_url') ?>/icons/linkedin-light.svg" width="48" height="48" alt="SVG Icon of LinkedIn"></object>
            <a class="link-light" rel="noopener" href="https://linkedin.com/in/jun-yong" target="_blank">linkedin.com/in/jun-yong</a>
        </div>
    </div>
</div>

<style>
    .contact-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #212529;
        color: white !important;
        padding: 50px 0 98px;

        background: #212529;
        box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
    }

    .top-row {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .line {
        width: 100%;
        height: 1px;
        border: solid 1px white;
    }

    .title {
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;
        white-space: nowrap;
        margin: 0 28px;
    }

    .subtitle {
        font-weight: 400;
        font-size: 24px;
        line-height: 29px;
    }

    .contact-card .content {
        margin: 37px 150px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contact-card .link-light {
        font-weight: 500;
        font-size: 24px;
        color: #FFFFFF;
    }
</style>