# -*- coding: utf-8 -*-
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service
from selenium import webdriver


class WebDriver:
    def __init__(self, driver_path: str, starting_url: str):
        try:
            options = webdriver.ChromeOptions()
            options.add_argument('--start-maximized')
            options.add_argument('--incognito')
            options.add_experimental_option('excludeSwitches', ['enable-automation'])
            options.add_experimental_option('useAutomationExtension', False)
            service = Service(executable_path=driver_path)
            self.web_driver = webdriver.Chrome(service=service, options=options)
            self.web_driver.get(starting_url)
        except Exception as e:
            print(f'Could not initialize web driver: {e}')

    def new_tab(self, url: str):
        try:
            self.web_driver.execute_script('window.open();')
            self.web_driver.switch_to.window(self.web_driver.window_handles[-1])
            self.web_driver.get(url)
        except Exception as e:
            print(f'Could not open a new tab with the given url: {url} - {e}')

    def new_search(self, item_id: str, search: str):
        try:
            search_bar = self.web_driver.find_element(By.ID, item_id)
            search_bar.clear()
            search_bar.send_keys(search)
            search_bar.send_keys(Keys.RETURN)
        except Exception as e:
            print(f'Could not find specified web item: {item_id} - {e}')

    def __del__(self):
        try:
            self.web_driver.quit()
        except Exception:
            print('Could not close the web driver')
