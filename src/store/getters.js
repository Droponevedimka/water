export const getters = {
    getTestById: (state, getters) => (id) => {
        return state.tests.find(tests => tests.id == id)
    },
    getFinallyById: (state, getters) => (id) => {
        return state.testFinal.find(testFinal => testFinal.id == id)
    }    
}
