import {GET_MENUS, GET_SETTINGS_DATA} from "./types";


export function fetchSettingsData() {
    return {
        type: GET_SETTINGS_DATA
    }
}

export function fetchMenus() {
    return {
        type: GET_MENUS
    }
}



