import {put, takeLatest, call} from 'redux-saga/effects'
import {GET_SETTINGS_DATA, SET_SETTINGS_DATA} from "../redux/types";
import {fetchSettings} from "../api/getSettings";


export function* introSaga() {
    console.log('Hello Sagas!');
    yield takeLatest(GET_SETTINGS_DATA, sagaGetSettings);
}



function* sagaGetSettings(){
    try{
        const payload   = yield call(fetchSettings);
        // console.log(payload);
        yield put({type: SET_SETTINGS_DATA, payload});
    } catch (e) {
        console.log(e);
    }
}