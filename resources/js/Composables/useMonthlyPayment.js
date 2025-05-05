import {computed, isRef} from 'vue';

export const useMonthlyPayment = (propertyPrice, interestRate, duration )=>{
    const monthlyPayment = computed(()=>{
        const principle = propertyPrice
        const monthlyInterest = (isRef(interestRate) ? interestRate.value : interestRate)/100/12
        const numberOfPaymentMonths = duration*12
        return principle * monthlyInterest * (Math.pow(1 + monthlyInterest, numberOfPaymentMonths)) / (Math.pow(1 + monthlyInterest, numberOfPaymentMonths) - 1)
    })

    return {monthlyPayment}
}