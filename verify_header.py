from playwright.sync_api import sync_playwright

with sync_playwright() as p:
    browser = p.chromium.launch()
    page = browser.new_page(viewport={'width': 1280, 'height': 800})
    page.goto('http://127.0.0.1:8080/page-ipsaa-nosotros.php')
    page.wait_for_timeout(1000)
    page.screenshot(path='/tmp/header_nosotros_check.png', full_page=False)
    browser.close()
