import os
from playwright.sync_api import sync_playwright

os.makedirs("/home/jules/verification/videos", exist_ok=True)
os.makedirs("/home/jules/verification/screenshots", exist_ok=True)

def run_cuj(page):
    page.goto("http://127.0.0.1:8000/page-experiencias.php")
    page.wait_for_timeout(1000)

    # Scroll down to observe introductory content
    page.evaluate("window.scrollTo(0, 600)")
    page.wait_for_timeout(1000)

    # Scroll through cards
    page.evaluate("window.scrollTo(0, 1500)")
    page.wait_for_timeout(1000)

    page.evaluate("window.scrollTo(0, 2600)")
    page.wait_for_timeout(1000)

    page.evaluate("window.scrollTo(0, 3800)")
    page.wait_for_timeout(1000)

    # Take screenshot at the personalized experiences block
    page.screenshot(path="/home/jules/verification/screenshots/verification_experiencias.png")
    page.wait_for_timeout(1000)

if __name__ == "__main__":
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=True)
        context = browser.new_context(
            record_video_dir="/home/jules/verification/videos"
        )
        page = context.new_page()
        try:
            run_cuj(page)
        finally:
            context.close()
            browser.close()
