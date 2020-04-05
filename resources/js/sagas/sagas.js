import {put, takeLatest, call} from 'redux-saga/effects'
import {GET_INITIAL_DATA, GET_MENUS, GET_SETTINGS_DATA, SET_MENU, SET_SETTINGS_DATA} from "../redux/types";
import {fetchSettings} from "../api/getSettings";
import {getMenus} from "../api/getMenus";
import {fetchMenus, fetchSettingsData} from "../redux/actions";


export function* introSaga() {
    console.log('Hello Sagas!');
    yield takeLatest(GET_INITIAL_DATA, sagaGetInitialData);
    yield takeLatest(GET_SETTINGS_DATA, sagaGetSettings);
    yield takeLatest(GET_MENUS, sagaGetMenu);
}

/*
* Get initial data from API
*/
function* sagaGetInitialData(){
    try{
        yield put(fetchSettingsData());
        yield put(fetchMenus());
    } catch (e) {
        console.log(e);
    }
}


/*
* Get settings theme
 */

function* sagaGetSettings(){
    try{
        const payload   = yield call(fetchSettings);
        // console.log(payload);
        yield put({type: SET_SETTINGS_DATA, payload});
    } catch (e) {
        console.log(e);
    }
}
/*
* Get menu
 */
function* sagaGetMenu(){
    try{
        const payload   = yield call(getMenus);
        // console.log(payload);
        yield put({type: SET_MENU, payload});
    } catch (e) {
        console.log(e);
    }
}


