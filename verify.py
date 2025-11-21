
import asyncio
from playwright.async_api import async_playwright

async def main():
    async with async_playwright() as p:
        browser = await p.chromium.launch()

        # Home page - Desktop
        page = await browser.new_page()
        await page.set_viewport_size({"width": 1920, "height": 1080})
        await page.goto('http://localhost:8000/home.php')
        await page.screenshot(path='screenshot_home_desktop.png')

        # Home page - Mobile
        await page.set_viewport_size({"width": 390, "height": 844})
        await page.goto('http://localhost:8000/home.php')
        await page.screenshot(path='screenshot_home_mobile.png')

        # Tour page - Desktop
        await page.set_viewport_size({"width": 1920, "height": 1080})
        await page.goto('http://localhost:8000/Valle-Sagrado-Maras-Moray.php')
        await page.screenshot(path='screenshot_tour_desktop.png')

        # Tour page - Mobile
        await page.set_viewport_size({"width": 390, "height": 844})
        await page.goto('http://localhost:8000/Valle-Sagrado-Maras-Moray.php')
        await page.screenshot(path='screenshot_tour_mobile.png')

        await browser.close()

asyncio.run(main())
