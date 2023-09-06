<template>
    <h2>Submit a new survey</h2>
        <div class="card">
            
  <div class="card-body">
        
        <form @submit.prevent="submitSurvey">
            <div v-for="(question, index) in questions" :key="index">
                <h4>{{ ++index }} -  {{ question.text }}</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="option in question.options" :key="option.id">
                        <label>
                            <input type="radio" :name="question.id" :value="option.id" v-model="responses[question.id]">
                            {{ option.text }}
                        </label>
                    </li>
                </ul>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
  
</template>

<script>

export default {
   
    data() {
        return {
            submitBtn: true,
            loadingBtn: false,
            questions: [
                // Define your questions and options here
                
                {
                    id: 'Q11A',
                    text: 'I found myself getting upset rather easily',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q12A',
                    text: 'I felt that I was using a lot of nervous energy',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                
                {
                    id: 'Q14A',
                    text: 'I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights, being kept waiting)',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                
                {
                    id: 'Q18A',
                    text: 'I felt that I was rather touchy',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                
            ],
            responses: {},
        };
    },

    methods: {
        
        submitSurvey() {
            
            axios
                .post("/api/dass42", this.responses)
                .then((response) => {})
                .catch((error) => {
                    console.error(error);
                    Toast.fire({
                        icon: "warning",
                        title: "Please fix the issues",
                    });
                });
        },
    },
};
</script>
