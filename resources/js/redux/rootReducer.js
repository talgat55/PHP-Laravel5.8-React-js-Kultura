import {combineReducers} from "redux";
import {settingsReducer} from "./settingsReducer";
import {menusReducer} from "./menusReducer";

export const rootReducer = combineReducers({
    settings: settingsReducer,
    menu: menusReducer
});