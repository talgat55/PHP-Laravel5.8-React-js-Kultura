import {SET_SETTINGS_DATA} from "./types";
const initialState = {
    data: ''
};
export const settingsReducer =  (state = initialState, action) =>{
    switch (action.type) {
        case SET_SETTINGS_DATA:
            return {...state,  data: action.payload};
        default:
            return state;
    }
};

